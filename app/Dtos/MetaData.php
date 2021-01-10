<?php

namespace App\Dtos;

class MetaData {
    private $meta_description;
    private $meta_image;

    public function __construct(string $meta_description, string $meta_image) {
        $this->meta_description = $meta_description;
        $this->meta_image = $meta_image;
    }

    public function getMetaDescription() {
        return $this->meta_description;
    }

    public function getMetaImage() {
        return $this->meta_image;
    }
}