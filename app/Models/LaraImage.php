<?php

namespace App\Models;

use Carbon\Carbon;

class LaraImage extends BaseModel {
    /**
     * Used to set the post's type
     */
    protected $postType = 'attachment';

    public function getImageUrl(int $image_id) {
        $image = $this->where('ID', $image_id)->first();
        if (!isset($image)) {
            return '';
        }
        return $image->guid;
    }
}