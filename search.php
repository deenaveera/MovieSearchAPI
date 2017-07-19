<?php
require 'config.php';
$term = $_GET['term'];
$obj = new Config();
$jsonresponse = $obj->CURL($term);
if($jsonresponse['Response'] == True)
{
	$title = $jsonresponse['Title'];
	$thumbnail = $jsonresponse['Poster'];
	$result = array(
				array('label' => $title, 'value' => $title, 'thumbnail' => $thumbnail, 'detailurl' => $base_url.'details.php?term='.$title)
			  );
	echo json_encode($result);
}

?>