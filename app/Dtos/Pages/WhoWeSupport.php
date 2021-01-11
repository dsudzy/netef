<?php

namespace App\Dtos\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class WhoWeSupport {
    public $meta_data;
    public $header;
    public $text_blocks = [];

    public function __construct(MetaData $meta_data, Header $header, array $text_blocks) {
        $this->meta_data = $meta_data;
        $this->header = $header;
        $this->text_blocks = $text_blocks;
    }
}