
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindfire";
 
 $conn = new mysqli($servername, $username, $password, $dbname) or die("ERROR:could not connect to the database!!!");
 
	$sql = "INSERT INTO persons(firstname, lastname, gender, email) values('" . $_POST["firstname"] . "','" .$_POST["lastname"]. "','" .$_POST["gender"]. "','".$_POST["email"]."')";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	
 

  

 