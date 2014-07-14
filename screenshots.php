<?php

include "header.php";
include "vendor/autoload.php";

use \Guzzle\Service\Client;

$url = "http://api.steampowered.com/ISteamRemoteStorage/GetUGCFileDetails/v1/?steamids=76561197960987682&key=DB9ABD17ACE86C8BB2F03DFC9A9A1990";
$client = new Client($url);


echo "Hi";

include "footer.php";

?>