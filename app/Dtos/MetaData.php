<?php

namespace App\Dtos;

class MetaData {
    public $meta_description;
    public $meta_image;

    public function __construct(string $meta_description, string $meta_image) {
        $this->meta_description = $meta_description;
        $this->meta_image = $meta_image;
    }
}