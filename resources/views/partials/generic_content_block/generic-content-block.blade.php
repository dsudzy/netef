<div class="content-item generic-content-block {{ !empty($content_block["secondary-content-block-grey-outline"]) && $content_block["secondary-content-block-grey-outline"] == true ? 'secondary-content-block' : '' }}">
    @if(!empty($content_block['title']))
        @include('partials.generic_content_block.partials.title', ['title' => $content_block["title"]])
    @endif
    @if(!empty($content_block['quote']))
        @include('partials.generic_content_block.partials.quote', [
            'quote' => $content_block["quote"],
            'quote_class' => $quote_class
        ])
    @endif
    @if(!empty($content_block['sub-header-text-1']) && !empty($content_block['sub-header-text-2']) && !empty($content_block['sub-header-text-3']))
        @include('partials.generic_content_block.partials.sub-header', [
            'sub_header_1' => $content_block["sub-header-text-1"],
            'sub_header_2' => $content_block["sub-header-text-2"],
            'sub_header_3' => $content_block["sub-header-text-3"],
            'sub_header_class' => $sub_header_class
        ])
    @endif
    @if(!empty($content_block['paragraph']))
        @include('partials.generic_content_block.partials.paragraph', ['paragraph' => $content_block["paragraph"]])
    @endif
    @if(!empty($content_block['vimeo-link']))
        @include('partials.generic_content_block.partials.vimeo-embed', ['embed_url' => $content_block["vimeo-link"]])
    @endif
    @if(!empty($content_block['button-url']) && !empty($content_block['button-text']))
        @include('partials.generic_content_block.partials.button', [
            'button_link'        => $content_block["button-url"],
            'button_text'        => $content_block["button-text"],
            'open_in_new_tab' => $content_block["open-in-new-tab"] ?? false
        ])
    @endif
</div>