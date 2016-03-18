<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindfire";
 
 $conn = new mysqli($servername, $username, $password, $dbname) ;
 
 
	$sql = "INSERT INTO persons(firstname, lastname, gender, email) values('" . $_POST["firstname"] . "','" .$_POST["lastname"]. "','" .$_POST["optradio"]. "','".$_POST["email"]."')";
	if ($conn->query($sql) === TRUE) {
		   $sqll = "SELECT * FROM persons";
		$result = $conn->query($sqll);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo " <pre>id: " . $row["id"]. " - Name: " . $row["firstname"]. "  " . $row["lastname"]. "  is " . $row["gender"]. " and email address: " .$row["email"]. "</pre><br>";
			}
		}
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();