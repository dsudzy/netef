<?php

namespace App\Http\Controllers;

use App\Models\{
    LaraPost,
    LaraPage,
    LaraImage
};
use Illuminate\Support\Str;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * PageController class handles all requests coming in for pages.
 */
class EventsController extends Controller {

    const PAGE_NAME = "events";
    const VIEW = "posts";

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
        
        $posts = $posts->filter(function($post) {
            return $post->meta->contains(function ($meta) {
                return $meta->meta_key == 'post_type' && $meta->meta_value == 'events';
            });
        });
        
        $paginator_page = Paginator::resolveCurrentPage() ?: 1;
        $perPage = 1;
        $posts = new LengthAwarePaginator(
            $posts->forPage($paginator_page, $perPage), $posts->count(), $perPage, $paginator_page, ['path' => Paginator::resolveCurrentPath()]
        );

        $meta_data = $this->getMetaData($page);

        $data = [
            'content'      => $page,
            'posts'        => $posts,
            'meta_data'    => $meta_data,
            'image'        => new LaraImage(),
            'body_classes' => self::PAGE_NAME,
        ];

        $view_content = view(self::VIEW, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

}
