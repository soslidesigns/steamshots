<?php
require "apikey.php";
require "OpenId.php";
require "getInfo.php";

/* Here we start session. This is required for the sessions to work! */

session_start();

/* This checks whether or not the session "SteamAuth" is set. */
/* This will return either a boolean true or a boolean false. */
/* True if the user is logged in and false if the user isn't. */

if (!(isset($_SESSION['SteamAuth']) && $_SESSION['SteamAuth'] != 'hi')) {
	$auth = false;
} else $auth = true;

include "header.php";
include "vendor/autoload.php";

use \Guzzle\Service\Client;

$url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?steamids=76561197960987682&key=DB9ABD17ACE86C8BB2F03DFC9A9A1990";
$client = new Client($url);

$res = $client->get()->send();

$players = $res->json()['response']['players'];

$avatar = $players[0]['avatarfull'];
$username = $players[0]['personaname'];
$profileurl = $players[0]['profileurl'];

$lastLog = date("F jS, Y", $players[0]['lastlogoff']);
							
echo "<a href='$profileurl' target='_blank'><img src='$avatar' title='$username'/></a>";
echo "<p> <strong>Last Online:</strong> $lastLog </p>";
echo "<strong>Share URL:</strong> <a href='$profileurl' target='_blank'>$profileurl</a>";

include "footer.php";

?>