<?php

namespace App\Dtos;

class TextBlock {
    public $header;
    public $body;
    public $button_text;
    public $button_link;
    public $video_link;

    public function __construct(
        string $header,
        string $body,
        string $button_text,
        string $button_link,
        string $video_link
    ) {
        $this->header = $header;
        $this->body = $body;
        $this->button_text = $button_text;
        $this->button_link = $button_link;
        $this->video_link = $video_link;
    }
}