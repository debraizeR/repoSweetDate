<?php 

if(isset($_COOKIE["cookieFirstname"]))
{
    $firstname = $_COOKIE["cookieFirstname"]; //header("location: /views/lovers.php");
} 
else
{
    // echo "faux";
    setcookie("cookieFirstname", $_POST["firstname"],time()+3600*24, "/"); 
        if(!empty($_POST["lastname"])){setcookie("cookieLastname", $_POST["lastname"], time()+3600*24, "/"); } 
        if(!empty($_POST["age"])){setcookie("cookieAge", $_POST["age"], time()+3600*24, "/");}
        if(!empty($_POST["gender"])){setcookie("cookieGender", $_POST["gender"], time()+3600*24, "/");}
        if(!empty($_POST["mail"])){setcookie("cookieMail", $_POST["mail"], time()+3600*24, "/");}
        if(!empty($_POST["zipcode"])){setcookie("cookieZipcode", $_POST["zipcode"], time()+3600*24, "/");}
        if(!empty($_POST["genderSearch"])){setcookie("cookieGenderSearch", $_POST["genderSearch"], time()+3600*24, "/");}
}



?>