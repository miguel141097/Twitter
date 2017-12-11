<?php 

	include('TwitterAPIExchange.php'); 

	$user = 'j2mc1410';

	$settings = array(
	    'oauth_access_token' => "939614008960839680-jLP7lU2kGDTa2v7gUOLQafG6kdZleNa",
	    'oauth_access_token_secret' => "O0ltCxJf9JlJ0DzqIVSpJnO30n27GG9Z2piM016G4zhDD",
	    'consumer_key' => "gddSkmry9mpTudoCPiKoiVsZ2",
	    'consumer_secret' => "u8WCbn0ubP6S0no5OguM7zueJoTs488iHaw7vb2yAPAazEcb6X"
	);

	/*Recurso Utilizado de la API*/
	$url = 'https://api.twitter.com/1.1/users/show.json';
	$getfield = '?screen_name='.$user.'';
	$requestMethod = 'GET';

	//echo $getfield;

	$twitter = new TwitterAPIExchange($settings);
	echo $twitter->setGetfield($getfield)
	    ->buildOauth($url, $requestMethod)
	    ->performRequest();

	echo "<br>".$twitter->getGetfield($getfield);

?>