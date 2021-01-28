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


    function deleteAllCookie()
    {
        if(isset($_COOKIE["cookieFirstname"]))
        {
            unset($_COOKIE["cookieFirstname"]);
            setcookie("cookieFirstname", "", time() -3600, "/");
        }
        if(isset($_COOKIE["cookieLastname"]))
        {
            unset($_COOKIE["cookieLastname"]);
            setcookie("cookieLastname", "", time() -3600, "/");

        }
        if(isset($_COOKIE["cookieAge"]))
        {
            unset($_COOKIE["cookieAge"]);
            setcookie("cookieAge", "", time() -3600, "/");
        }
        if(isset($_COOKIE["cookieGender"]))
        {
            unset($_COOKIE["cookieGender"]);
            setcookie("cookieGender", "", time() -3600, "/");
        }
        if(isset($_COOKIE["cookieMail"]))
        {
            unset($_COOKIE["cookieMail"]);
            setcookie("cookieMail", "", time() -3600, "/");
        }
        if(isset($_COOKIE["cookieZipcode"]))
        {
            unset($_COOKIE["cookieZipcode"]);
            setcookie("cookieZipcode", "", time() -3600, "/");
        }
        if(isset($_COOKIE["cookieChoice"]))
        {
            unset($_COOKIE["cookieChoice"]);
            setcookie("cookieChoice", "", time() -3600, "/");
        }
    }

?>