<?php

namespace App\Http\Controllers;

use App\Models\{
    LaraPage,
    LaraImage
};

/**
 * PageController class handles all requests coming in for pages.
 */
class PageController extends Controller {
    const PAGE_NAME = 'page';
    const CUSTOM_VIEWS = [
        'mission-and-vision',
        'contact-us'
    ];

    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    public function getPage($page_name) {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, $page_name);
        if ($view_content = $this->getCached($cache_key)) {
            return $view_content;
        }

        $page = LaraPage::slug($page_name)->first();
        if (!$page) {
            abort(404);
        }

        $meta_data = $this->getMetaData($page);

        $data = [
            'content'      => $page,
            'meta_data'    => $meta_data,
            'image'        => new LaraImage(),
            'body_classes' => $page_name,
        ];

        if (in_array($page_name, self::CUSTOM_VIEWS)) {
            $view = $page_name;
        } else {
            $view = self::PAGE_NAME;
        }

        $view_content = view($view, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

    public function sendEmail(Request $request) {
        try {
            Mail::to('dsudenfield@gmail.com')->send(
                new Contact(
                    $request->name,
                    $request->email_address,
                    $request->message,
                )
            );
            return redirect('contact-us')->with('status', 'Email sucessfully sent');
        } catch (\Exception $e) {}
        return redirect('contact-us');
    }

}
