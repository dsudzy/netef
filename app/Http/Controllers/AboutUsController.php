<?php

namespace App\Http\Controllers;

use App\Models\LaraPage;
use Illuminate\Support\Str;
use App\Dtos\{
    Pages\AboutUs,
    DonateButton
};

/**
 * PageController class handles all requests coming in for pages.
 */
class AboutUsController extends Controller {
    /**
     * Get a specific page from the database and return a view with 
     * the variables needed to display it to the user.
     * 
     * @param string $page_name
     * @return string view
     */
    private static $body_class = 'about-us';
    const PAGE_NAME = "about-us";

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
        $donate_button = $this->buildDonateButtonDto($meta_data_array);

        return new AboutUs(
            $meta_data_dto,
            $header,
            $donate_button,
            $meta_data_array["au_board_application_link"],
            $meta_data_array["au_board_of_directors_text"],
            $meta_data_array["au_button_1_text"],
            $meta_data_array["au_button_1_link"],
            $meta_data_array["au_button_2_text"],
            $meta_data_array["au_button_2_link"]
        );
    }

    private function buildDonateButtonDto($meta_data) {
        return new DonateButton($meta_data["au_donate_button_text"], $meta_data["au_donate_button_link"]);
    }

}
