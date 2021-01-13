<?php

namespace App\Http\Controllers;

use App\Models\LaraPage;
use Illuminate\Support\Str;
use App\Dtos\{
    Pages\WhoWeSupport,
    TextBlock
};

/**
 * PageController class handles all requests coming in for pages.
 */
class WhoWeSupportController extends Controller {
    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    private static $body_class = 'who-we-support';
    const PAGE_NAME = "who-we-support";

    public function getPage() {
        $cache_key = $this->buildCacheKey($this->cache_key_prefix, self::PAGE_NAME);
        if ($view_content = $this->getCached($cache_key)) {
            return $view_content;
        }

        $page = LaraPage::slug(self::PAGE_NAME)->first();

        if (!$page) {
            abort(404);
        }

        $page_content = $this->buildContent($page);
        
        $data = [
            'content' => $page_content,
            'body_classes' => self::$body_class,
        ];

        $view_content = view(self::PAGE_NAME, $data);

        $this->setCache($cache_key, $view_content->render(), $this->cache_minutes_to_live);
        return $view_content;
    }

    private function buildContent($page) {
        $meta_data_array = $this->getMetaData($page);
        $meta_data_dto = $this->buildMetaDataDto($meta_data_array);
        $header = $this->buildHeaderDto($meta_data_array);
        $text_boxes = $this->buildTextBoxs($meta_data_array);

        return new WhoWeSupport($meta_data_dto, $header, $text_boxes);
    }

    private function buildTextBoxs($meta_data) {
        return [
            new TextBlock($meta_data['wws_header_1'], $meta_data['wws_body_1'], $meta_data['wws_button_text_1'], $meta_data['wws_button_link_1'], $meta_data['wws_video_1']),
            new TextBlock($meta_data['wws_header_2'], $meta_data['wws_body_2'], $meta_data['wws_button_text_2'], $meta_data['wws_button_link_2'], $meta_data['wws_video_2']),
        ];
    }

}
