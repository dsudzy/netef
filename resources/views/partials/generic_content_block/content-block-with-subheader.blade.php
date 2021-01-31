<div class="content-item with-subheader">
    @if(!empty($content_block['title']))
        @include('partials.generic_content_block.title', ['title' => $content_block["title"]])
    @endif
    @if(!empty($content_block['sub-header-text-1']) && !empty($content_block['sub-header-text-2']) && !empty($content_block['sub-header-text-3']))
        @include('partials.generic_content_block.sub-header', [
            'sub_header_1' => $content_block["sub-header-text-1"],
            'sub_header_2' => $content_block["sub-header-text-2"],
            'sub_header_3' => $content_block["sub-header-text-3"]
        ])
    @endif
    @if(!empty($content_block['paragraph']))
        @include('partials.generic_content_block.paragraph', ['paragraph' => $content_block["paragraph"]])
    @endif
    @if(!empty($content_block['vimeo-link']))
        @include('partials.generic_content_block.vimeo-embed', ['embed_url' => $content_block["vimeo-link"]])
    @endif
    @if(!empty($content_block['button-url']) && !empty($content_block['button-text']))
        @include('partials.generic_content_block.button', [
            'button_link' => $content_block["button-url"],
            'button_text' => $content_block["button-text"]
        ])
    @endif
</div>