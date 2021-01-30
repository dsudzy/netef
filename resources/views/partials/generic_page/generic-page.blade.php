<div class="content-item">
    @if(!empty($content_block['title']))
        @include('partial.generic_page.title', ['title' => $content["title"]])
    @endif
    @if(!empty($content_block['sub-header_1']) && !empty($content_block['sub-header_2']) && !empty($content_block['sub-header_3']))
        @include('partial.generic_page.sub-header', [
            'sub_header_1' => $content["sub_header_1"],
            'sub_header_2' => $content["sub_header_2"],
            'sub_header_3' => $content["sub_header_3"]
        ])
    @endif
    @if(!empty($content_block['paragraph']))
        @include('partial.generic_page.paragraph', ['paragraph' => $content["paragraph"]])
    @endif
    @if(!empty($content_block['vimeo-embed']))
        @include('partial.generic_page.vimeo-embed', ['embed_url' => $content["embed_url"]])
    @endif
    @if(!empty($content_block['button-link']) && !empty($content_block['button-text']))
        @include('partial.generic_page.button', [
            'button_link' => $content["button-link"],
            'button_text' => $content["button-text"],
        ])
    @endif
</div>