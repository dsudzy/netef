<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\LaraPage;
use Response;
use File;
use Config;

/**
 * This class looks for the sitemap in the cache. if it finds it then it 
 * renders the sitemap otherwise it builds it.
 * When it builds the sitemap it queries the database to get all posts
 * and all pages. It then merges to two arrays. Then it calls generateXmlSitemap
 * to turn the arrays into xml and returning it to the generate function. 
 *
 * the first time sitemap.xml is hit it generates then turns the xml directly to the screen
 * after that it is rendered from cahce.
 * 
 */
class XmlSitemapController extends Controller {
    const LAST_MODIFIED_DATE = '2017-01-04T16:32:02+00:00';
    // identifies if its a post
    const POST_TYPE = 'post';
    // identifies if its a page
    const PAGE_TYPE = 'page';
    const CACHE_KEY = 'xml-sitemap';

    // path to sitemap
    private $base_url;

    public function __construct() {
        $this->base_url = Config::get('app.url');
    }

    /**
     * Gets a sitemap from the cache. If it is not cached then it 
     * build the sitemap and renders it on the page 
     * 
     * @return xml
     */
    public function generate() {
        $cache_key = self::CACHE_KEY;
        // check to see if xml is cached if it is display it
        if($contents = $this->getCached($cache_key)) {
            return Response::make($contents, '200')->header('Content-Type', 'text/xml');
        }

        // xml was not cached so we generate it
        $post_array = []; //$this->addLinkPath(Larapost::getPostsList('post'));
        $page_array = $this->addLinkPath(LaraPage::getAllPages());
        // merge post and page arrays
        $sitemap_array = array_merge($post_array, $page_array);
        // generate xml
        $contents = $this->generateXmlSitemap($sitemap_array);

        $this->setCache($cache_key, $contents);

        // render xml on page
        return Response::make($contents, '200')->header('Content-Type', 'text/xml');
    }

    /**
     * Loops through each item of the array and adds the domain.
     * If its a post type it adds the ARTICLE_URL and if its a
     * page it adds the HOMEPAGE_URL. If it is neither then the loop 
     * continues
     * 
     * @param  array $collection
     * @return array - sanitized sitemap array
     */
    private function addLinkPath($collection) {
        // making sure inputs are valid
        if($collection->isEmpty()) {
            return [];
        }

        $paths = [];

        foreach($collection as $item) {
            // make sure the post_name field is not empty
            if(empty($item->post_name)) {
                continue;
            }

            if ($item->post_type == self::PAGE_TYPE) {
                $url = ($item->post_name == "home") ? $this->base_url : $this->base_url . "/" . $item->post_name;
                
                $paths[] = [
                    'url' => $url,
                    'date'  => $item->post_modified
                ];
            }
        }
        return $paths;
    }

    /**
     * We set the initial xml elements then loop over the
     * sitemap_array adding the url to each xml element.
     * then save the xml.
     * 
     * @param  array $sitemap_array
     * @return void
     */
    private function generateXmlSitemap($sitemap_array) {
        $xml = new \DOMDocument('1.0', 'UTF-8');
        $xml_urlset = $xml->createElement('urlset');
        $xml_urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $xml_urlset->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $xml_urlset->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
        $xml_urlset = $xml->appendChild($xml_urlset);

        // loop through array of urls and add to xml
        foreach ($sitemap_array as $item) {
            $xml_url = $xml->createElement('url');
            $xml_url = $xml_urlset->appendChild($xml_url);
            $xml_url->appendChild($xml->createElement('loc', $item["url"]));
            $xml_url->appendChild($xml->createElement('lastmod', $item["date"]));
        }
        $xml->formatOutput = true;
        $xml->preserveWhiteSpace = false;

        return $xml->saveXML($xml_urlset);
    }
}
