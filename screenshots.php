<?php

$pagetitle = "Screen Shots";

include "header.php";
include "vendor/autoload.php";

if(!isset($_SESSION['steamid'])) {

    echo "welcome guest! please login \n \n";
    steamlogin(); //login button
    
}  else {
    include ('userInfo.php');
	
    //Protected content
    echo "<div style=\"text-align:right;\"><br /><strong>Welcome to your Screen Shots,</strong><a href=\"profile.php\">" . $steamprofile['personaname'] . "</a><br /></div>";
	
}    

include "footer.php";

?>