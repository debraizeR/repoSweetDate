<?php

if(isset($_COOKIE["cookieFirstname"]) && isset($_COOKIE["cookieLastname"]) && isset($_COOKIE["cookieAge"])
  && isset($_COOKIE["cookieGender"]) && isset($_COOKIE["cookieMail"]) && isset($_COOKIE["cookieZipcode"]) && isset($_COOKIE["cookieChoice"]))
{
    $firstname = $_COOKIE["cookieFirstname"];
    $lastname = $_COOKIE["cookieLastname"];
    $age = $_COOKIE["cookieAge"];
    $gender = $_COOKIE["cookieGender"];
    $mail = $_COOKIE["cookieMail"];
    $zipcode = $_COOKIE["cookieZipcode"];
    $choice = $_COOKIE["cookieChoice"];
    
}
else
{
    $firstname = "prénomfaux";
    $lastname = "nomfaux";
    $age = 0;
    $gender = "genrefaux";
    $mail = "mailfaux";
    $zipcode = "codefaux";
    $choice = "choixfaux";   
}



?>