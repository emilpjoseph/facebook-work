<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook";

// Create Connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection


if (!$conn)
{
	die("connection failed: " .mysqli_connect_error());
	
}

$sql = 'SELECT * from `userinfo` WHERE `email` = "'.$_POST["email"].'" && `password` = "'.$_POST["password"].'"'; 

//passing data to database 

$result = $conn->query($sql);
// to debug
//var_dump($vsriable);
//echo $vsriable;
//print_r($vsriable);
print_r($result);
if(!$result) {
      die('DB Error');
   }
   
   echo $result->num_rows;
   