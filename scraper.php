<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';


$site = 'http://202.61.43.40:8080/index.php?r=site%2Fsearchbyvalue&page=';
//This is for Pagination 
for($page = 0; $page < 1; $page++)
    {
        $FinalURL = $site . $page;
        $html = file_get_html($FinalURL);
    }

if($html ==true)
{
//This is for Table Scrapping
foreach($html->find("//*[@id='w0']/table/tbody/tr") as $element) 
	{

		if($element)
	{

	echo 	$num   = $element->find("td", 0);
	echo	$courtname  = $element->find("td", 1);
	echo	$caseno  = $element->find("td", 2);
	echo	$status  = $element->find("td", 3);
	$href = $element->find(".//td/button", 0);

	if(is_object($href))
	{
		 $urlbutton = $href->value;
		 echo $urlbutton;
	}
	}
	}}
	else{
		$html = file_get_html($FinalURL);
	}
?>
