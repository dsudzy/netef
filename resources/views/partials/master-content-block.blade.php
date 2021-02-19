@if($template == 'page')
    @if($block_name == 'inspirational-quote')
        @include('partials.inspirational-quote', [
            'quote' => $content_block['quote'] ?? ''
        ])
    @endif
    @if($block_name == 'generic-content-block')
        @include('partials.generic_content_block.generic-content-block', [
            'content_block' => $content_block,
            'quote_class' => $quote_class,
            'sub_header_class' => $sub_header_class,
        ])
    @endif
    @if($block_name == 'styled-list')
        @include('partials.styled-list', [
            'title' => $content_block['title'] ?? '',
            'list' => $content_block['list'] ?? '',
        ])
    @endif
    @if($block_name == 'interstitial-link')
        @include('partials.interstitial', [
            'linked_page'     => $content_block['linked-page'] ?? '',
            'title'           => $content_block['title'] ?? '',
            'color_image'     => $image->getImageUrl($content_block['color-image'] ?? 0),
            'grey_image'      => $image->getImageUrl($content_block['grey-image'] ?? 0),
            'open_in_new_tab' => $content_block['open-in-new-tab'] ?? false
        ])
    @endif
    @if($block_name == 'additional-information')
        @include('partials.additional-information', [
            'text' => $content_block['text'] ?? '',
        ])
    @endif
@endif
@if($template == 'home')
    @if($block_name == 'header-quote')
        @include('partials.header-quote', [
            'quote' => $content_block["quote"] ?? '',
        ])
    @endif
    @if($block_name == 'homepage-callout-blocks')
        @include('partials.homepage-callout', [
            'page' => $content_block["page"],
            'image' => $image->getImageUrl($content_block["image"]),
            'title' => $content_block["title"],
            'paragraph' => $content_block["paragraph"],
            'count' => count($content_block)
        ])
    @endif
@endif
