@foreach($html_content as $content_blocks)
    @foreach($content_blocks as $block_name => $content_block)
        @php
        $content_names = [];
        $quote_class = "";
        $sub_header_class = "";
        foreach($content_block[0] as $name => $content) {
            if ($name == "quote" && !empty($content)) {
                $content_names[] = 'quote';
            }
            if ($name == "sub-header-text-1" && !empty($content)) {
                $content_names[] = 'sub-header-text-1';
            }
            if ($name == "sub-header-text-2" && !empty($content)) {
                $content_names[] = 'sub-header-text-2';
            }
            if ($name == "sub-header-text-3" && !empty($content)) {
                $content_names[] = 'sub-header-text-3';
            }
        }
        if (in_array('quote', $content_names) && in_array('sub-header-text-1', $content_names) && in_array('sub-header-text-2', $content_names) && in_array('sub-header-text-3', $content_names)) {
            $quote_class = "sub-header-and-quote";
            $sub_header_class = "sub-header-and-quote";
        } else if (in_array('quote', $content_names)) {
            $quote_class = "just-quote";
            $sub_header_class = "";
        } else if (in_array('sub-header-text-1', $content_names) && in_array('sub-header-text-2', $content_names) && in_array('sub-header-text-3', $content_names)) {
            $quote_class = "";
            $sub_header_class = "just-sub-header";
        }
        @endphp
    @endforeach
    @foreach($content_blocks as $block_name => $content_block)
        @include('partials.master-content-block', [
            'template' => 'page',
            'block_name' => $block_name,
            'content_block' => $content_block[0],
            'quote_class' => $quote_class,
            'sub_header_class' => $sub_header_class,
        ])
    @endforeach
@endforeach