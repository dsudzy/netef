<?php

namespace App\Dtos;

class Header {
    private $header_image;

    public function __construct(string $header_image) {
        $this->header_image = $header_image;
    }

    public function getHeaderImage() {
        return $this->header_image;
    }
}