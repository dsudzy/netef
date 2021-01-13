<?php

namespace App\Dtos;

class Story {
    public $title;
    public $text;
    public $button_text;
    public $button_link;
    public $image_url;

    public function __construct(string $title, string $text, string $button_text, string $button_link, string $image_url) {
        $this->title = $title;
        $this->text = $text;
        $this->button_text = $button_text;
        $this->button_link = $button_link;
        $this->image_url = $image_url;
    }
}