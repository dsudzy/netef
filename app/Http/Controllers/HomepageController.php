<?php

namespace App\Http\Controllers;

use App\Models\LaraPage;
use Illuminate\Support\Str;
use App\CustomFieldsConstants;

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

    private function getCalloutBlocks($count = 3) {
        $pages = Larapage::published()->where("post_name", "<>" , self::PAGE_NAME)->get();
        
        if ($pages->isEmpty()) {
            return [];
        }

        $unordered_callouts = $this->convertActiveCalloutsToArray($pages);
        $ordered_callouts = $this->orderCallouts($unordered_callouts);
        return $this->sliceCallouts($ordered_callouts, $count);
    }

    private function convertActiveCalloutsToArray($pages) {
        $callout_data = [];
        foreach($pages as $page) {
            $meta_data = [];
            foreach($page->meta as $meta_key => $meta) {
                if (!$meta_key) {
                    $meta_data["page_name"] = $page->post_name;
                }
                if (!in_array($meta->meta_key, CustomFieldsConstants::HOMEPAGE_CALLOUT)) {
                    continue;
                }
                if ($meta->meta_key == "add_callout_to_homepage" && $meta->meta_value == "0") {
                    break 1;
                }
                $meta_data[$meta->meta_key] = $meta->value;
            }
            $callout_data[] = $meta_data;
        }
        return $callout_data;
    }

    private function orderCallouts($unordered_callouts, $leftovers = []) {
        $ordered_callouts = [];
        foreach($unordered_callouts as $callout) {
            if (empty($callout["order"]) || $callout["order"] == 0) {
                $leftovers[] = $callout;
            } else {
                $ordered_callouts[$callout["order"]] = $callout;
            }
        }
        if (count($ordered_callouts) < 3 && !empty($leftovers)) {
            return $this->appendLeftovers($ordered_callouts, $leftovers);
        }
        return $ordered_callouts;
    }

    private function appendLeftovers($ordered_callouts, $leftovers) {
        foreach($leftovers as $leftover) {
            array_push($ordered_callouts, $leftover);
        }
        return $ordered_callouts;
    }

    private function sliceCallouts($ordered_callouts, $count) {
        return array_slice($ordered_callouts, 0, $count -1);
    }

}
