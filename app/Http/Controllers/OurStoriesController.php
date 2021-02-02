<?php

namespace App\Http\Controllers;

use App\Models\{
    LaraPost,
    LaraPage,
    LaraImage
};
use Illuminate\Support\Str;
use App\Dtos\{
    Pages\Grants,
};

/**
 * PageController class handles all requests coming in for pages.
 */
class OurStoriesController extends Controller {
    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    const PAGE_NAME = "our-stories";

    public function getPage() {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, self::PAGE_NAME);
        if ($view_content = $this->getCached($cache_key)) {
            return $view_content;
        }

        $page = LaraPage::slug(self::PAGE_NAME)->first();
        if (!$page) {
            abort(404);
        }

        $posts = LaraPost::published()->orderBy('post_date', 'desc')->get();

        $meta_data = $this->getMetaData($page);

        $data = [
            'content'      => $page,
            'posts'        => $posts,
            'meta_data'    => $meta_data,
            'image'        => new LaraImage(),
            'body_classes' => self::PAGE_NAME,
        ];

        $view_content = view(self::PAGE_NAME, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

}
