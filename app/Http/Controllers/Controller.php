<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * returns cache by key if caching is enabled
     * @param  string $cache_key
     * @return mixed false if cache is disabled or not present string if it exists.
     */
    protected function getCached($cache_key) {
        if (Config::get('app.cacheDisabled') || !Cache::has($cache_key)) {
            return;
        }
        return Cache::get($cache_key) . '<!-- cache -->';
    }

    /**
     * concatinates the prefix plus dash with suffix to create the cache key
     * @param  string $prefix
     * @param  string $suffix
     * @return string
     */
    protected function buildCacheKey($prefix, $suffix = '') {
    	return $prefix . "-" . $suffix;
    }

    /**
     * sets the cached content
     * @param string $cache_key
     * @param object $content
     * @param integer $minutes_to_live
     * @return mixed
     */
    protected function setCache($cache_key, $content, $minutes_to_live) {
        return Cache::put($cache_key, $content, $minutes_to_live);
    }
}
