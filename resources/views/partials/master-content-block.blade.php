@if($template == 'page')
    @if($block_name == 'inspirational-quote')
    @include('partials.inspirational-quote', [
        'quote' => $content_block['quote'] ?? ''
    ])
    @endif
    @if($block_name == 'content-block-with-sub-header')
    @include('partials.generic_content_block.content-block-with-subheader', ['content_block' => $content_block])
    @endif
    @if($block_name == 'content-block-without-sub-header')
    @include('partials.generic_content_block.content-block-without-subheader', ['content_block' => $content_block])
    @endif
    @if($block_name == 'header')
    @include('partials.header', [
        'title' => $content_block['title'] ?? '',
        'paragraph' => $content_block['paragraph'] ?? '',
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
        'linked_page'  => $content_block['linked-page'] ?? '',
        'title'        => $content_block['title'] ?? '',
        'color_image'  => $image->getImageUrl($content_block['color-image'] ?? 0),
        'grey_image'   => $image->getImageUrl($content_block['grey-image'] ?? 0),
    ])
    @endif
    @if($block_name == 'additional-information')
    @include('partials.additional-information', [
        'text' => $content_block['text'] ?? '',
    ])
    @endif
    @if($block_name == 'header-quote')
    @include('partials.header-quote', [
        'quote' => $content_block["quote"] ?? '',
        'icon' => $image->getImageUrl($content_block["icon"] ?? 0),
    ])
    @endif
@endif
@if($template == 'home')
    @if($block_name == 'header-quote')
    @include('partials.header-quote', [
        'quote' => $content_block["quote"] ?? '',
        'icon' => $image->getImageUrl($content_block["icon"] ?? 0),
    ])
    @endif
    @if($block_name == 'callout-blocks')
    @include('partials.callout-page', [
        'page' => $content_block["page"],
        'image' => $image->getImageUrl($content_block["image"]),
        'title' => $content_block["title"],
        'paragraph' => $content_block["paragraph"],
        'count' => count($content_block)
    ])
    @endif
@endif
