<?php 

if(isset($_COOKIE["cookieFirstname"]) && isset($_COOKIE["cookieLastname"]))
{
    $firstname = $_COOKIE["cookieFirstname"];
    $lastname = $_COOKIE["cookieLastname"];
    header("location: /views/lovers.php");
    exit();
} 
else
{
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]))
    {
        setcookie("cookieFirstname", $_POST["firstname"],time()+3600*24, "/"); 
        setcookie("cookieLastname", $_POST["lastname"], time()+3600*24, "/");
        $firstname = $_COOKIE["cookieFirstname"];
        header("location: index.php");
        exit();
        
        
        // if(!empty($_POST["age"])){setcookie("cookieAge", $_POST["age"], time()+3600*24, "/");}
        // if(!empty($_POST["gender"])){setcookie("cookieGender", $_POST["gender"], time()+3600*24, "/");}
        // if(!empty($_POST["mail"])){setcookie("cookieMail", $_POST["mail"], time()+3600*24, "/");}
        // if(!empty($_POST["zipcode"])){setcookie("cookieZipcode", $_POST["zipcode"], time()+3600*24, "/");}
        // if(!empty($_POST["genderSearch"])){setcookie("cookieGenderSearch", $_POST["genderSearch"], time()+3600*24, "/");}
    }
    
}



?>