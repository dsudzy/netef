<?php

namespace App\Models;

use Carbon\Carbon;

class Page extends BaseModel {
    /**
     * Used to set the post's type
     */
    protected $postType = 'page';

    public static function getAllPages() {
        return self::where('post_date', '<', Carbon::now())->published()->get();
    }
}