<?php

namespace App\DTOs\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;
use App\Dtos\DonateButton;

class AboutUs {
    public $header;
    public $meta_data;
    public $donate_button;
    public $board_application_link;
    public $board_of_directors_text;
    public $button_1_text;
    public $button_1_link;
    public $button_2_text;
    public $button_2_link;

    public function __construct(
        MetaData $meta_data,
        Header $header,
        DonateButton $donate_button,
        ?string $board_application_link,
        ?string $board_of_directors_text,
        ?string $button_1_text,
        ?string $button_1_link,
        ?string $button_2_text,
        ?string $button_2_link
    ) {
        $this->header = $header;
        $this->meta_data = $meta_data;
        $this->donate_button = $donate_button;
        $this->board_application_link = $board_application_link;
        $this->board_of_directors_text = $board_of_directors_text;
        $this->button_1_text = $button_1_text;
        $this->button_1_link = $button_1_link;
        $this->button_2_text = $button_2_text;
        $this->button_2_link = $button_2_link;
    }
}