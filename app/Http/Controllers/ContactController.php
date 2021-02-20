<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    LaraPage,
    LaraImage
};
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

/**
 * PageController class handles all requests coming in for pages.
 */
class ContactController extends Controller {
    const PAGE_NAME = 'contact-us';

    public function getPage() {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, self::PAGE_NAME);
        if ($view_content = $this->getCached($cache_key)) {
            return $view_content;
        }

        // @TODO add PAGE_NAME here
        $page = LaraPage::slug(self::PAGE_NAME)->first();
        if (!$page) {
            abort(404);
        }

        $meta_data = $this->getMetaData($page);

        $data = [
            'content'      => $page,
            'meta_data'    => $meta_data,
            'image'        => new LaraImage(),
            'body_classes' => self::PAGE_NAME,
        ];

        $view_content = view(self::PAGE_NAME, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

    public function sendEmail(Request $request) {
        Mail::to('dsudenfield@gmail.com')->send(
            new Contact(
                $request->name,
                $request->email_address,
                $request->message,
            )
        );

        return redirect('contact-us')->with('status', 'Email sucessfully sent');
    }

}
