<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Cache;
use Config;
use App\Models\BaseModel;
use Illuminate\Support\Str;
use App\Dtos\{
    MetaData,
    Header
};

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const RESERVED_META_KEYS = ["callout"];

    // prefix of cached name to get 
    protected $cache_key_prefix = 'cache-';
    
    // The amount of time the cache is kept 
    protected $cache_minutes_to_live = 60;

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
    protected function setCache($cache_key, $content, $minutes_to_live = 0) {
        return Cache::put($cache_key, $content, $minutes_to_live);
    }

    /**
     * Iterate of the meta data of the post_object and remove where meta_key begins with underscore.
     * Then add it to the meta_data array.
     * 
     * @param  object $post_object
     * @return array  $meta_data
     */
    protected function getMetaData(BaseModel $post_object) {
        // iterate over meta data
        $metas = $post_object->meta->reject(function($meta) {
            return substr($meta->meta_key, 0, 1) === '_';
        });
        // turn meta data into key=>value
        $meta_data = [];
        foreach ($metas as $meta) {
            $meta_data[$meta->meta_key] = $meta->value;
        }

        return $meta_data;
    }

    protected function buildMetaDataDto($meta_data) {
        return new MetaData($meta_data["meta_description"], $meta_data["meta_image"]);
    }

    protected function buildHeaderDto($meta_data) {
        return new Header($meta_data["header_image"]);
    }
}
