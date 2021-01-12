<?php

namespace App\Dtos;

class DonateButton {
    public $header_image;

    public function __construct(string $header_image) {
        $this->header_image = $header_image;
    }
}