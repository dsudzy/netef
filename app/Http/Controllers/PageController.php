<?php

namespace App\Http\Controllers;

use App\Page;
use App\Category;

/**
 * PageController class handles all requests coming in for pages.
 *
 * @author brendan butts <brendan@alipes.com>
 */

class PageController extends Controller
{
    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    
    private static $body_class = 'page';
    protected $cache_key_prefix = 'page';

    /**
     * Get the homepage which includes featured posts
     * 
     * @return string view containing features posts
     */
    public function getHomePage()
    {
        $cache_key = $this->buildCacheKey($this->cache_key_home_prefix);
        if($view_content = $this->getCached($cache_key))
        {
            return $view_content;
        }

        // $body_classes = PostController::$body_class_home;
        // get featured content
        // $posts = LaraPost::type('post')
        //           ->hasMeta('featured_content', '1')
        //           ->published()
        //           ->orderBy('post_date', 'desc')
        //           ->get();
        
        $posts = LaraPost::type('post')->published()->get();
        
        $posts = $posts->reject(function($post)
        {
            foreach ($post->meta as $meta) {
                if ($meta->meta_key == 'post_bridge_to_page' && !($meta->meta_value == 0)) {
                    return true;
                }
            }
            return false;
        });

        $posts = $posts->take(3);

        // set meta data based on private class variables for home page since it's a composite page
        $meta_data = [
            'meta_description' => PostController::$home_page_meta_description,
        ];
        
        $view_content = view('home', [
            'posts' => $posts, 
            'body_classes' => $body_classes, 
            'meta_data' => $meta_data,
        ]);
        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

    /**
     * Gets a specific page from database
     * @param  string $page_name
     * @return string view
     */
    public function getPage($page_name) 
    {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, $page_name);
        if($view_content = $this->getCached($cache_key))
        {
            return $view_content;
        }

        $body_classes = PageController::$body_class;

        // $page = LaraPage::slug($page_name)->first();
        // if (!$page)
        // {
        //     abort(404);
        // }
        // // iterate over meta data
        // $metas = $page->meta->reject(function($meta)
        // {
        //     return substr($meta->meta_key, 0, 1) === '_';
        // });
        // // turn meta data into key=>value
        // $meta_data = [];
        // foreach ($metas as $meta)
        // {
        //     $meta_data[$meta->meta_key] = $meta->value;
        // }

        // // get all categories
        // $all_categories = Category::all();
        // $ordered_categories = [];
        // $filtered_categories = [];
        // // add categories to a key=>value
        // // add the filter categories (for filtering posts) to key=>value
        // // needed because we only save the category_id with the advance plugin
        // foreach ($all_categories as $category)
        // {
        //     // not every post will always have filter_categories
        //     if (!isset($meta_data['filter_categories']) || !is_array($meta_data['filter_categories']))
        //     {
        //         continue;
        //     }
        //     $ordered_categories[$category->term->term_id] = $category->term->name;
        //     if (in_array($category->term->term_id, $meta_data['filter_categories']))
        //     {
        //         $filtered_categories[$category->term->slug] = $category->term->name;
        //     }
        // }
        // // need an imploded version of filtered_categories as well
        // $filtered_keys = array_keys($filtered_categories);
        // $filtered_categories_implode = implode(',', $filtered_keys);
        // $filtered_results = FilterController::filterByCategory($filtered_keys);
        // $view_content = view('page', [
        //     'content' => $page,
        //     'meta_data' => $meta_data,
        //     'categories' => $ordered_categories,
        //     'filtered_categories' => $filtered_categories,
        //     'filtered_categories_implode' => $filtered_categories_implode,
        //     'filtered_results' => $filtered_results,
        //     'body_classes' => $body_classes,
        // ]);

        // $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        // return $view_content;
    }
}
