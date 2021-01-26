<?php 

if(isset($_COOKIE["cookieFirstname"]))
{
    $firstname = $_COOKIE["cookieFirstname"]; //header("location: /views/lovers.php");
} 
else
{
    echo "faux";
}



?>