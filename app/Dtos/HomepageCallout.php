<?php

namespace App\Dtos;

class HomepageCallout {
    private $page_name;
    private $callout_image;
    private $callout_title;
    private $callout_text;
    private $order;

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

    public function getPageName() {
        return $this->page_name;
    }

    public function getCalloutImage() {
        return $this->callout_image;
    }

    public function getCalloutTitle() {
        return $this->callout_title;
    }

    public function getCalloutText() {
        return $this->callout_text;
    }

    public function getOrder() {
        return $this->order;
    }
}