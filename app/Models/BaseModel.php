<?php

namespace App\Models;

use Corcel\Model\Post as Corcel;

class BaseModel extends Corcel {
    /**
     * 
     */
    protected $connection = 'corcel';

    public function getHtmlContentAttribute() {
        preg_match_all('/<!-- wp:block-lab\/(.*?)\/-->/s', $this->post_content, $match);
        $post_content = [];
        foreach ($match[1] as $content) {
            $content_breakdown = $this->breakdownContentString($content);
            $content_string = trim($content_breakdown['content']);
            $title = trim($content_breakdown['title']);
            $json_decoded_content = json_decode($content_string, true);
            $post_content[][$title][] = $json_decoded_content;
        }
        return $this->nl2br($post_content);
    }

    private function nl2br($post_content) {
        foreach ($post_content as $blocks_key => $blocks) {
            foreach($blocks as $key => $block_content) {
                $post_content[][$key][0]['paragraph'] = str_replace(array("\r\n", "\r", "\n"), "<br />", $block_content[0]['paragraph']);
            }
        }
        return $post_content;
    }

    private function breakdownContentString($content_strings) {

        $title = substr($content_strings, 0, strpos($content_strings, "{"));
        $content = substr($content_strings, strpos($content_strings, "{"));

        return [
            'title' => $title,
            'content' => $content
        ];
    }
}