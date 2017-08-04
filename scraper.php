<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$url = 'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyvalue&page=';
for ($innerloop = 100; $innerloop <9999; $innerloop++) 
			{
				$NewLink	=	$url  . $innerloop;
				$html 		= file_get_html($NewLink);
}

echo $html;
?>
