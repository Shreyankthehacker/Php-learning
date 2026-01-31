<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"]=="POST"){

$firstname = htmlspecialchars($_POST['firstName']);
$lastname = htmlspecialchars($_POST['lastName']);
$favpet = htmlspecialchars($_POST['animal']);


if(empty($firstname)){
    exit();
   // header("Location:../index.php");
}

echo $firstname;
echo $lastname;
echo $favpet;
echo $firstname." ".$lastname;

}

else{
    header("Location:../index.php");
}