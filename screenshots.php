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

$url = "http://api.steampowered.com/ISteamRemoteStorage/GetUGCFileDetails/v1/?steamids=76561197960987682&key=DB9ABD17ACE86C8BB2F03DFC9A9A1990";
$client = new Client($url);


echo "Hi";

include "footer.php";

?>