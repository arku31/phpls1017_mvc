<?php
require_once "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->loadFromUrl('http://arku-cv.com/');
$html = $dom->outerHtml; // same result as the first example

$result = $dom->find('.contacts_list li')[0];
echo $result;
?>

