<?php

namespace App\Dtos\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class OurStories {
    public $meta_data;
    public $header;
    public $stories = [];

    public function __construct(MetaData $meta_data, Header $header, array $stories) {
        $this->meta_data = $meta_data;
        $this->header = $header;
        $this->stories = $stories;
    }
}