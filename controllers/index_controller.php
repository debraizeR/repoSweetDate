<?php 

$testCookie = false;


if(isset($_COOKIE["cookieFirstname"]) && isset($_COOKIE["cookieLastname"]) && isset($_COOKIE["cookieAge"])
&& isset($_COOKIE["cookieGender"]) && isset($_COOKIE["cookieMail"]) && isset($_COOKIE["cookieZipcode"]) && isset($_COOKIE["cookieChoice"]))
{
    $testCookie = true;
    header("Location: /views/lovers.php");
    exit();
} 
else
{
    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["age"]) && !empty($_POST["gender"]) 
    && !empty($_POST["mail"]) && !empty($_POST["zipcode"]) && !empty($_POST["choice"]) && !empty($_POST["description"]))
    {
        regexFirstName($_POST["firstname"]);
        regexLastName($_POST["lastname"]);
        regexAge($_POST["age"]);
        setcookie("cookieGender", $_POST["gender"], time()+3600*24, "/");
        regexMail($_POST["mail"]);
        regexZipcode($_POST["zipcode"]);
        setcookie("cookieChoice",$_POST["choice"], time()+3600*24, "/");
        setcookie("cookieDescription", $_POST["description"], time()+3600*24, "/");
        header("Location: index.php");
        exit();
        
    }
    
}

function regexFirstName($testFirstname)
{
    $regex = "/^[A-Z][\p{L}-]*$/i";
    if(preg_match($regex, $testFirstname))
    {
        setcookie("cookieFirstname", $_POST["firstname"],time()+3600*24, "/"); 
    }
    
}

function regexLastName($testLastname)
{
    $regex = "/^[A-Z][\p{L}-]*$/i";
    if(preg_match($regex, $testLastname))
    {
        setcookie("cookieLastname", $_POST["lastname"], time()+3600*24, "/");
    }
    
}

function regexAge($testAge)
{
    $regex = "/^[0-9]{1,2}$/i";
    if(preg_match($regex, $testAge) && $testAge>= 18)
    {
        setcookie("cookieAge", $_POST["age"], time()+3600*24, "/");
    }
    
}

function regexMail($testMail)
{
    $regex = "/^[a-zA-Z][a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/i";
    if(preg_match($regex, $testMail))
    {
        setcookie("cookieMail", $testMail, time()+3600*24, "/");
    }
    
}

function regexZipcode($testZipcode)
{
    $regex = "/^[0-9]{5}$/i";
    if(preg_match($regex, $testZipcode))
    {
        setcookie("cookieZipcode", $_POST["zipcode"], time()+3600*24, "/");
    }
    
}

?>