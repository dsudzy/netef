<?php

namespace App\Dtos\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class WhoWeSupport {
    private $meta_data;
    private $header;
    private $text_blocks = [];

    public function __construct(MetaData $meta_data, Header $header, array $text_blocks) {
        $this->meta_data = $meta_data;
        $this->header = $header;
        $this->text_blocks = $text_blocks;
    }

    public function getMetaData() {
        return $this->meta_data;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getTextBlocks() {
        return $this->text_blocks;
    }
}