<?php

namespace App\DTOs\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class Grants {
    private $header;
    private $meta_data;
    private $text_block;

    public function __construct(MetaData $meta_data, Header $header, ?string $text_block) {
        $this->header = $header;
        $this->meta_data = $meta_data;
        $this->text_block = $text_block;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getMetaData() {
        return $this->meta_data;
    }

    public function getTextBlock() {
        return $this->text_block;
    }
}