<?php

namespace App\Models;

use Carbon\Carbon;

class LaraImage extends BaseModel {
    /**
     * Used to set the post's type
     */
    protected $postType = 'attachment';

    public function getImageUrl($image_id) {
        if (!is_numeric($image_id)) {
            return '';
        }
        $image = $this->where('ID', (int) $image_id)->first();
        if (!isset($image)) {
            return '';
        }
        $image_url = $image->guid;
        if (env('APP_ENV') != "local") {
            $image_url = str_replace(env('APP_URL') . '/wordpress/wp-content/uploads', env('S3_BUCKET_URL', ''), $image->guid);
        }
        return $image_url;
    }
}