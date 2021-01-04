<?php

namespace App\Http\Controllers;

use App\Models\LaraPage;
use Illuminate\Support\Str;
use App\CustomFieldsConstants;

/**
 * PageController class handles all requests coming in for pages.
 *
 * @author Daniel Sudenfield <dsudenfield@gmail.com>
 */
class HomepageController extends Controller {
    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    // private static $body_class = 'page';
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

        $callouts = $this->getCalloutBlocks();

        // sanatize meta data and build array
        $meta_data = $this->getMetaData($page);

        $data = [
            'content' => $page,
            'callouts' => $callouts,
            'meta_data' => $meta_data,
            // 'body_classes' => self::$body_class,
        ];
        // dd($data);
        $view_content = view(self::PAGE_NAME, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

    private function getCalloutBlocks() {
        $pages = Larapage::published()->where("post_name", "<>" , self::PAGE_NAME)->get();
        
        if ($pages->isEmpty()) {
            return [];
        }

        $callout_data = [];
        foreach($pages as $key => $page) {
            if (isset($callout_data[$key])) {
                $array_key = get_last_key($callout_data) + 1;
            } else {
                $array_key = $key;
            }
            
            foreach($page->meta as $meta_key => $meta) {
                if (!$meta_key) {
                    $callout_data[$key]["page_name"] = $page->post_name;
                }
                if (!in_array($meta->meta_key, CustomFieldsConstants::HOMEPAGE_CALLOUT)) {
                    continue;
                }
                if ($meta->meta_key == "add_callout_to_homepage" && $meta->meta_value == "0") {
                    unset($callout_data[$array_key]);
                    break 1;
                }

                if ($meta->meta_key == "order") {
                    $array_key = $meta->value;
                    $callout_data[$array_key] = $callout_data[$key];
                    unset($callout_data[$key]);
                } else {
                    $callout_data[$array_key][$meta->meta_key] = $meta->value;
                }

                if (count($callout_data) == 3) {
                    break 2;
                }
            }
        }

        return $callout_data;
    }
}
