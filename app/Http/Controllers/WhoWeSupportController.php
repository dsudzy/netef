<?php

namespace App\Http\Controllers;

use App\Models\LaraPage;
use Illuminate\Support\Str;
use App\CustomFieldsConstants;

/**
 * PageController class handles all requests coming in for pages.
 */
class WhoWeSupportController extends Controller {
    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    private static $body_class = 'who-we-support';
    const PAGE_NAME = "who-we-support";

    public function getPage() {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, self::PAGE_NAME);
        if ($view_content = $this->getCached($cache_key)) {
            return $view_content;
        }

        $page = LaraPage::slug(self::PAGE_NAME)->first();

        if (!$page) {
            abort(404);
        }

        $meta_data = $this->getMetaData($page, CustomFieldsConstants::META_DATA);
        
        $header_image = $this->getMetaData($page, CustomFieldsConstants::HEADER_IMAGE);

        $page_content = $this->getMetaData($page, CustomFieldsConstants::WHO_WE_SUPPORT);
        
        $data = [
            'content' => $page_content,
            'header_image' => $header_image["header_image"],
            'meta_data' => $meta_data,
            'body_classes' => self::$body_class,
        ];

        $view_content = view(self::PAGE_NAME, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

}
