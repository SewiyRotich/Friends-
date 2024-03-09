<?php 
session_start();

$name =$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pswd'];

echo("name :$name <br>");
echo("email :$email <br> ");   
// echo "$password";
?>