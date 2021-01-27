<?php

if(isset($_COOKIE["cookieFirstname"]) && isset($_COOKIE["cookieLastname"]) && isset($_COOKIE["cookieChoice"]))
{
    $firstname = $_COOKIE["cookieFirstname"];
    $lastname = $_COOKIE["cookieLastname"];
    $choice = $_COOKIE["cookieChoice"];
    
}
else
{
    $firstname = "faux";
    $lastname = "faux";
    $choice = "faux";   
}



?>