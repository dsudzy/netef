<?php

namespace App\Http\Controllers;

use App\Models\{
    LaraPage,
    LaraImage
};

/**
 * PageController class handles all requests coming in for pages.
 */
class HomepageController extends Controller {

    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    private static $body_class = 'home';
    const PAGE_NAME = "home";

    /**
     * Get the homepage which includes featured posts
     * 
     * @return string view containing features posts
     */
    public function getHomePage() {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, self::PAGE_NAME);
        if ($view_content = $this->getCached($cache_key)) {
            return $view_content;
        }

        $page = LaraPage::slug(self::PAGE_NAME)->first();
        if (!$page) {
            abort(404);
        }
        
        $meta_data = $this->getMetaData($page);
        $data = [
            'meta_data' => $meta_data,
            'image' => new LaraImage(),
            'content' => $page,
            'body_classes' => self::$body_class,
        ];

        $view_content = view(self::PAGE_NAME, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }
}
