<?php

$pagetitle = "Profile";

include "header.php";
include "vendor/autoload.php";

    include ('userInfo.php');

    //Protected content
    echo "<br /><strong>Welcome to your Profile,</strong>" . $steamprofile['personaname'] . "<hr />";
    echo '<img src="'.$steamprofile['avatarfull'].'" title="'.$steamprofile['personaname'].'" />'; // Display their avatar!
	echo "<br /><strong>Share:</strong> <a href=". $steamprofile['profileurl'] ." target='_blank'>" . $steamprofile['profileurl'] . "</a><br />";
	
	//Load Experation Date Video
	echo "<hr /><div style=\"text-align:left;\"><iframe width=\"560\" height=\"315\" src=\"//www.youtube.com/embed/GLlLQ3LmZWU\" frameborder=\"0\" allowfullscreen></iframe></div>";
	
include "footer.php";

?>