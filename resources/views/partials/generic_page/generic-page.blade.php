<div class="content-item">
    @if($content)
        @include('partial.generic_page.title', ['title' => $content["title"]])
    @endif
    @if($content)
        @include('partial.generic_page.sub-header', [
            'sub_header_1' => $content["sub_header_1"],
            'sub_header_2' => $content["sub_header_2"],
            'sub_header_3' => $content["sub_header_3"]
        ])
    @endif
    @if($content)
        @include('partial.generic_page.paragraph', ['paragraph' => $content["paragraph"]])
    @endif
    @if($content)
        @include('partial.generic_page.vimeo-embed', ['embed_url' => $content["embed_url"]])
    @endif
    @if($content)
        @include('partial.generic_page.button', [
            'button_link' => $content["button_link"],
            'button_text' => $content["button_text"],
        ])
    @endif
</div>