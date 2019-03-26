<?php

//header("Content-Type: application/json");

$i = 1;

$tab = array();

foreach (file('source.csv') as $line) {
	$row = explode(';', $line);

	echo '{"index": {"_id": '.$i.'}}';
	echo '<br>';

	//echo $row[2].'<br>';

	$row[0] = str_replace('"', "'", $row[0]);
	$row[1] = str_replace('"', "'", $row[1]);
	$row[2] = str_replace('"', "'", $row[2]);
	$row[3] = str_replace('"', "'", $row[3]);
	$row[4] = str_replace('"', "'", $row[4]);
	$row[5] = str_replace('"', "'", $row[5]);
	$row[6] = str_replace('"', "'", $row[6]);
	$row[7] = str_replace('"', "'", $row[7]);

	$tab = array(
		"title" => htmlentities($row[0]),
		"seo_title" => htmlentities($row[1]),
		"url" => htmlentities($row[2]),
		"author" => array('name' => htmlentities($row[3])),
		"date" => htmlentities($row[4]),
		"category" => htmlentities($row[5]),
		"locales" => htmlentities($row[6]),
		"content" => htmlentities($row[7])
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