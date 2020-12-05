<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;

class BaseModel extends Corcel {
    /**
     * 
     */
    protected $connection = 'corcel';

    /**
     * Wordpress requires that we nl2br in order to format properly
     * thus we can call this function from $post->html_content
     * 
     * @return string nl2br content
     */
    public function getHtmlContentAttribute() {
        return nl2br($this->post_content);
    }
}