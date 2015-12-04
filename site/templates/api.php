<?php
header('Content-Type: application/json');

$format = get('format');
$page_uri = get('page');
$data = page($page_uri)->children();
$json = array();

foreach($data as $page) {

	$type = $page->title();
	foreach($page->children() as $element){
		$json[(string)$element->uid()] = (string)$element->title();
	}

}

echo json_encode($json);

?>
