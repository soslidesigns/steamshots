<?php

    $api_key = "DB9ABD17ACE86C8BB2F03DFC9A9A1990"; // Insert API Key here!

    $urla = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . $api_key; 
    $urlb = "&steamids=";
    $urlc = $urla . $urlb;
    $url = $urlc . $_SESSION['steamid'];
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch);
    curl_close($ch);
    $content = json_decode($content, true);

    $steamprofile['steamid'] = $content['response']['players'][0]['steamid'];
    $steamprofile['communityvisibilitystate'] = $content['response']['players'][0]['communityvisibilitystate'];
    $steamprofile['profilestate'] = $content['response']['players'][0]['profilestate'];
    $steamprofile['personaname'] = $content['response']['players'][0]['personaname'];
    $steamprofile['lastlogoff'] = $content['response']['players'][0]['lastlogoff'];
    $steamprofile['profileurl'] = $content['response']['players'][0]['profileurl'];
    $steamprofile['avatar'] = $content['response']['players'][0]['avatar'];
    $steamprofile['avatarmedium'] = $content['response']['players'][0]['avatarmedium'];
    $steamprofile['avatarfull'] = $content['response']['players'][0]['avatarfull'];
    $steamprofile['personastate'] = $content['response']['players'][0]['personastate'];
?>