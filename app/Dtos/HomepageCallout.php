<?php

namespace App\Dtos;

class HomepageCallout {
    public $page_name;
    public $callout_image;
    public $callout_title;
    public $callout_text;
    public $order;

    public function __construct(
        ?string $page_name,
        ?string $callout_image,
        ?string $callout_title,
        ?string $callout_text,
        $order
    ) {
        $this->page_name = $page_name;
        $this->callout_image = $callout_image;
        $this->callout_title = $callout_title;
        $this->callout_text = $callout_text;
        $this->order = $order;
    }
}