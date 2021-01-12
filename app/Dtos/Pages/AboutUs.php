<?php

namespace App\DTOs\Pages;

use App\Dtos\Header;
use App\Dtos\MetaData;

class Grants {
    public $header;
    public $meta_data;
    public $text_block;
    public $board_application_link;
    public $board_of_directors_text;

    public function __construct(
        MetaData $meta_data,
        Header $header,
        DonateButton $donate_button,
        ?string $board_application_link,
        ?string $board_of_directors_text
    ) {
        $this->header = $header;
        $this->meta_data = $meta_data;
        $this->text_block = $text_block;
        $this->board_application_link = $board_application_link;
        $this->board_of_directors_text = $board_of_directors_text;
    }
}