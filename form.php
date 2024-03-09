<?php 
session_start();


$name =$_POST['name'];
$email=$_POST["email"];
$password=$_POST["pswd"];

echo("$name <br>");
echo("$email <br> ");   
// echo "$password";
?>