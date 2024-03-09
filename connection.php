<?php
$servername ="localhosts";
$username ="root";
$password =" ";
$dbname ="user_management";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error)  {
    die("connection failed:".$conn->connect_error);
}

