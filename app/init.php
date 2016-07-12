<?php

session_start();
require_once 'vendor/autoload.php';
require_once 'app/FacebookAuth.php';

$fb = new Facebook\Facebook([
	'app_id' => '591269711053183',
	'app_secret' => '55883de7c8773599c18ccb17d3c911dd',
	'default_graph_version' => 'v2.5',
]);

$fbauth = new FacebookAuth($fb);
