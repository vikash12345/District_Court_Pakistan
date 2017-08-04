<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$url = 'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyvalue&page=';
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
?>
