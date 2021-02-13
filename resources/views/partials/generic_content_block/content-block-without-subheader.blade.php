<div class="content-item without-subheader">
    @if(!empty($content_block['title']))
        @include('partials.generic_content_block.partials.title', ['title' => $content_block["title"]])
    @endif
    @if(!empty($content_block['paragraph']))
        @include('partials.generic_content_block.partials.paragraph', ['paragraph' => $content_block["paragraph"]])
    @endif
    @if(!empty($content_block['vimeo-link']))
        @include('partials.generic_content_block.partials.vimeo-embed', ['embed_url' => $content_block["vimeo-link"]])
    @endif
    @if(!empty($content_block['button-url']) && !empty($content_block['button-text']))
        @include('partials.generic_content_block.partials.button', [
            'button_link' => $content_block["button-url"],
            'button_text' => $content_block["button-text"]
        ])
    @endif
</div>