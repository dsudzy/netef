<?php

namespace App\DTOs\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class Home {
    private $header;
    private $meta_data;
    private $callout_blocks = [];

    public function __construct(Header $header, MetaData $meta_data, array $callout_blocks) {
        $this->header = $header;
        $this->meta_data = $meta_data;
        $this->callout_blocks = $callout_blocks;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getMetaData() {
        return $this->meta_data;
    }

    public function getCalloutBlocks() {
        return $this->callout_blocks;
    }
}