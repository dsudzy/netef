<?php

namespace App\DTOs\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class Grants {
    public $header;
    public $meta_data;
    public $text_block;

    public function __construct(MetaData $meta_data, Header $header, ?string $text_block) {
        $this->header = $header;
        $this->meta_data = $meta_data;
        $this->text_block = $text_block;
    }
}