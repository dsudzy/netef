<?php

namespace App\Dtos;

class DonateButton {
    public $button_text;
    public $button_link;

    public function __construct(?string $button_text, ?string $button_link) {
        $this->button_text = $button_text;
        $this->button_link = $button_link;
    }
}