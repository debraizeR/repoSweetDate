<?php 

if(isset($_COOKIE["cookieFirstname"]) && isset($_COOKIE["cookieLastname"]) && isset($_COOKIE["cookieAge"])
&& isset($_COOKIE["cookieGender"]) && isset($_COOKIE["cookieMail"]) && isset($_COOKIE["cookieZipcode"]) && isset($_COOKIE["cookieChoice"]))
{
    header("location: /views/lovers.php");
    exit();
} 
else
{
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["age"]) && !empty($_POST["gender"]) 
    && !empty($_POST["mail"]) && !empty($_POST["zipcode"]) && !empty($_POST["choice"]))
    {
        setcookie("cookieFirstname", $_POST["firstname"],time()+3600*24, "/"); 
        setcookie("cookieLastname", $_POST["lastname"], time()+3600*24, "/");
        setcookie("cookieAge", $_POST["age"], time()+3600*24, "/");
        setcookie("cookieGender", $_POST["gender"], time()+3600*24, "/");
        regexMail($_POST["mail"]);
        setcookie("cookieZipcode", $_POST["zipcode"], time()+3600*24, "/");
        setcookie("cookieChoice",$_POST["choice"], time()+3600*24, "/");
        header("location: index.php");
        exit();
        
    }
    
}

function regexFirstName($firstname)
{
    $regex = "/aerzgetr/i";
}

function regexMail($testMail)
{
    $regex = "/^[a-zA-Z][a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/";
    if(preg_match($regex, $testMail))
    {
        setcookie("cookieMail", $testMail, time()+3600*24, "/");
    }
    else
    {
        setcookie("cookieMail", "echec", time()+3600*24, "/");
    }
}


?>