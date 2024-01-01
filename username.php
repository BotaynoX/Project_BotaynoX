<?php
include "config.php";
if(isUserConnected()){
    echo '<h5>'.$_SESSION["name"].'</h5>';
}
else{
    echo' <a href="login.php">LogIn</a>';
}
?>