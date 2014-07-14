<?php

$pagetitle = "Profile";

include "header.php";
include "vendor/autoload.php";

if(!isset($_SESSION['steamid'])) {

    echo "welcome guest! please login \n \n";
    steamlogin(); //login button
    
}  else {
    include ('userInfo.php');

    //Protected content
    echo "<br /><strong>Welcome Back,</strong>" . $steamprofile['personaname'] . "<br />";
    echo '<img src="'.$steamprofile['avatarfull'].'" title="'.$steamprofile['personaname'].'" />'; // Display their avatar!
	echo "<br /><strong>Share:</strong> <a href=". $steamprofile['profileurl'] ." target='_blank'>" . $steamprofile['profileurl'] . "</a><br />";
}    

include "footer.php";

?>