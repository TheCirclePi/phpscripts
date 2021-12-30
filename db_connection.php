<?php

function OpenCon()
 {
   //keys of database connection
 $servername = "ls-3d4f1a951e6cb457b6f4f5a9f8fc94567f3965a8.cyytk1xm8re5.us-east-1.rds.amazonaws.com";
 $username = "dbmasteruser";
 $password = "pRX>x2ECd>esX;18uq*!V:j)gTH+;1I_";
 $dbname = "userData";

//create connection
 $conn = new mysqli($servername, $username, $password, $dbname);

 //Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 } else {
   echo "Connection OK, ";
 }

 //variables that await values from the mobile application
$firstName = $_POST['fn']
$lastName = $_POST['ln']
$email = $_POST['e'];
$phoneNumber $_POST['pn']
$birthday = $_POST['bd']
$username = $_POST['un'];
$password = $_POST['pass'];


//SQL command for data insert
$newUsers = "INSERT INTO userData (firstName, lastName, email, phoneNumber, birthday, username, password) VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$birthday', '$username', '$password');";

//connection and query control
if ($conn->query($newUsers) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $newUsers . "<br>" . $conn->error;

}

$conn->close();
}  

?>