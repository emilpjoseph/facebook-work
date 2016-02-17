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


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$gender = $_POST["gender"];

  $sql = "INSERT INTO userinfo (fname,lname,email,mobile,password) VALUES ( '$firstname', '$lastname', '$email', '$mobile', '$password')";

 $result = $conn->query($sql);
 
  if(!$result) {
      die('Could not enter data: ' . $conn->error);
   }
   
   echo "Entered data successfully\n";
   
   $conn->close();
?>