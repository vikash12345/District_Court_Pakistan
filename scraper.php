<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';

$url = 'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyvalue&page=';
for ($innerloop = 1; $innerloop <2; $innerloop++) 
			{
				$NewLink	=	$url  . $innerloop;
				$html 		= file_get_html($NewLink);
}

foreach($html->find("/html/body/div/table/tbody/tr[1]/td/form/table/tbody/tr[7]/td/table/tbody") as $element)
			{

				if($element)
				{
					echo $reg_no 		= $element->find("tr/td[2]/font" ,1);
					echo $reg_date 		= $element->find("tr/td[2]/font" ,2);
					echo $maker 		= $element->find("tr/td[2]/font" ,4);
					echo $model 		= $element->find("tr/td[2]/font" ,6);
					echo $chassis_no	= $element->find("tr/td[2]/font" ,8);
					echo $engine_no 	= $element->find("tr/td[2]/font" ,10);
					echo $owner 		= $element->find("tr/td[2]/font" ,12);
					echo $sw 			= $element->find("tr/td[2]/font" ,14);
					echo $type 			= $element->find("tr/td[2]/font" ,16); 
					echo $NewLink;
					
					
					
					
					
					
					
				}
}
?>
