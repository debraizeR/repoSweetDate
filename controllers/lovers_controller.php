<?php

if(isset($_COOKIE["cookieFirstname"]) && isset($_COOKIE["cookieLastname"]))
{
    $firstname = $_COOKIE["cookieFirstname"];
    $lastname = $_COOKIE["cookieLastname"];
}
else
{
    $firstname = "faux";
    $lastname = "faux";
}



?>