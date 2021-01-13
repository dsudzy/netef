<?php

namespace App\Http\Controllers;

use App\Models\LaraPost;
use Illuminate\Support\Str;
use App\Dtos\{
    Pages\Grants,
};

/**
 * PageController class handles all requests coming in for pages.
 */
class GrantsController extends Controller {
    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    private static $body_class = 'our-stories';
    const PAGE_NAME = "our-stories";

    public function getPage() {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, self::PAGE_NAME);
        if ($view_content = $this->getCached($cache_key)) {
            return $view_content;
        }

        $page = LaraPage::slug(self::PAGE_NAME)->first();

        $posts = LaraPost::published()->all();

        if (!$page) {
            abort(404);
        }

        $page_content = $this->buildContent($posts);

        $data = [
            'content' => $page_content,
            'body_classes' => self::$body_class,
        ];

        $view_content = view(self::PAGE_NAME, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

    private function buildContent($page) {
        $meta_data_array = $this->getMetaData($page);
        $meta_data_dto = $this->buildMetaDataDto($meta_data_array);
        $header = $this->buildHeaderDto($meta_data_array);

        return new Grants($meta_data_dto, $header, $meta_data_array["text_block"]);
    }

}
