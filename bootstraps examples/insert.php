<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindfire";
 
 $conn = new mysqli($servername, $username, $password, $dbname) ;
 
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $gender = $_POST['optradio'];
 $email = $_POST['email'];
 $sql = "INSERT INTO persons(firstname, lastname, gender, email) values(' $firstname','$lastname','$gender','$email')";



$conn->close();