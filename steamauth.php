<?php
ob_start();
session_start();
require ('openid.php');
$api_key = "DB9ABD17ACE86C8BB2F03DFC9A9A1990"; //Insert API Key here!

function logoutbutton() {
    echo "<br /><a href=\"logout.php\">Logout</a>"; //logout button
}

function steamlogin()
{
try {
    // Change 'localhost' to your domain name.
    $openid = new LightOpenID('http://www.soslidesigns.com');
    if(!$openid->mode) {
        if(isset($_GET['login'])) {
            $openid->identity = 'http://steamcommunity.com/openid';
            header('Location: ' . $openid->authUrl());
        }
    echo "<form action=\"?login\" method=\"post\"> <input type=\"image\" src=\"http://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_small.png\"></form>";
}

     elseif($openid->mode == 'cancel') {
        echo 'User has canceled authentication!';
    } else {
        if($openid->validate()) { 
                $id = $openid->identity;
                $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                preg_match($ptn, $id, $matches);
              
                session_start();
                $_SESSION['steamid'] = $matches[1]; 
                
                 header('Location: '.$_SERVER['REQUEST_URI']);
                 
        } else {
                echo "User is not logged in.\n";
        }

    }
} catch(ErrorException $e) {
    echo $e->getMessage();
}
}

?>
