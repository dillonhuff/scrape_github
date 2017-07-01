<?php

include('/Users/dillon/Downloads/simplehtmldom_1_5/simple_html_dom.php');
$url = 'https://github.com/dillonhuff/gpr/blob/master/src/gcode_program.h';
$output = file_get_contents($url);
$html = str_get_html($output);
echo $output;
?>