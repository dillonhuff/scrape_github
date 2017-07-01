<?php

include('/Users/dillon/Downloads/simplehtmldom_1_5/simple_html_dom.php');
$url = 'https://github.com/dillonhuff/stl_parser';
$output = file_get_contents($url);
$html = str_get_html($output);

$ret = $html->find('a[class="social-count js-social-count"]');

foreach($ret as $element)
	     // echo count($element->children());
       	     // echo $element;
	     echo $element->innertext . "\n";

//echo $output;
?>