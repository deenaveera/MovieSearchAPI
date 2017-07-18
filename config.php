<?php
$base_url = "http://" . $_SERVER['SERVER_NAME'] . '/search-api/moviesearch/';

class Config {
	
	public function CURL($term)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL,'http://www.omdbapi.com/?t='.$term.'&apikey=ec6483bd');
		$result=curl_exec($ch);
		curl_close($ch);
		$jsonresponse = json_decode($result, true);
		return $jsonresponse;
	}
}

?>

