<?php

//header("Content-Type: application/json");

$i = 1;

$tab = array();

foreach (file('source.csv') as $line) {
	$row = explode(';', $line);

	echo '{"index": {"_id": '.$i.'}}';
	echo '<br>';

	//echo $row[2].'<br>';

	$tab = array(
		"title" => $row[0],
		"seo_title" => $row[1],
		"url" => $row[2],
		"author" => array('name' => $row[3]),
		"date" => $row[4],
		"category" => $row[5],
		"locales" => $row[6],
		"content" => $row[7]
	);


	echo json_encode($tab);
	echo '<br>';
	$i++;
	//die();
	// if($i == 10){
	// 	die();
	// }
}
//echo json_encode($tab);
//echo '<pre>';
//var_dump(json_encode($tab));