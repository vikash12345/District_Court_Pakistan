<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


$html = scraperwiki::scrape("http://google.com/);
$dom = new simple_html_dom();
 $dom->load($html);
echo $dom;

?>
