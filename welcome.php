<?php
if(!isset($_SESSION['steamid'])) {

    echo "welcome guest! please login \n \n";
    steamlogin(); //login button
    
}  else {
    include ('userInfo.php');

    //Protected content
    echo "<div class=\"welcomeback\"><strong>Welcome Back,</strong> " . $steamprofile['personaname'] . "</br></div>";
    echo "<br />" . '<a href="profile.php"><img src="'.$steamprofile['avatarmedium'].'" title="Hi, '. $steamprofile['personaname'] .'" /></a>'; // Display their avatar!
    
    logoutbutton();
}    
?>