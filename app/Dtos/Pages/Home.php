<?php

namespace App\DTOs\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class Home {
    public $header;
    public $meta_data;
    public $callout_blocks = [];

    public function __construct(MetaData $meta_data, Header $header, array $callout_blocks) {
        $this->header = $header;
        $this->meta_data = $meta_data;
        $this->callout_blocks = $callout_blocks;
    }
}