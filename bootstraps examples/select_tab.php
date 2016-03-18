<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindfire";
 
 $conn = new mysqli($servername, $username, $password, $dbname) or die("ERROR:could not connect to the database!!!");
 
 $sql = "SELECT id, firstname, lastname FROM persons";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
 


$conn->close();