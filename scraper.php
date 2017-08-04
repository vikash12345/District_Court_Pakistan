<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


$html = scraperwiki::scrape("http://google.com/);
$dom = new simple_html_dom();
 $dom->load($url);
echo $dom;
/*
for ($innerloop = 1; $innerloop <2; $innerloop++) 
			{
				$NewLink	=	$url  . $innerloop;
				$html 		= file_get_html($NewLink);
}

foreach($html->find("//*[@id='w0']/table/tbody/tr") as $element) 
			{

				if($element)
				{
					echo 	$num   = $element->find("td", 0);

					
					
					
					
					
					
					
				}
}
*/
?>
