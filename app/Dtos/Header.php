<?php

namespace App\Dtos;

class Header {
    public $header_image;

    public function __construct(string $header_image) {
        $this->header_image = $header_image;
    }
}