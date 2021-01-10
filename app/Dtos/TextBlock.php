<?php

namespace App\Dtos;

class TextBlock {
    private $header;
    private $body;
    private $button_text;
    private $button_link;

    public function __construct(
        string $header,
        string $body,
        string $button_text,
        string $button_link
    ) {
        $this->header = $header;
        $this->body = $body;
        $this->button_text = $button_text;
        $this->button_link = $button_link;
    }

    public function getHeader() {
        return $this->header;
    }

    public function getbody() {
        return $this->body;
    }

    public function getButtonText() {
        return $this->button_text;
    }

    public function getButtonLink() {
        return $this->button_link;
    }
}