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

        $view_content = view('page', $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

}
