<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mindfire";


 $conn = new mysqli($servername, $username, $password, $dbname) ;
	
// Retrieve data from Query String
$Firstname = $_GET['Firstname'];
$Lastname = $_GET['Lastname'];
$gender= $_GET['gender'];
$email= $_GET['email'];
	
// Escape User Input to help prevent SQL Injection
$Firstname = mysql_real_escape_string($Firstname);
$Lastname = mysql_real_escape_string($Lastname);
$gender= mysql_real_escape_string($gender);
$email= mysql_real_escape_string($email);
	
//build query
$query = "SELECT * FROM persons ";

	
//Execute query
$qry_result = mysql_query($query) or die(mysql_error());

//Build Result String
$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>firstname</th>";
$display_string .= "<th>lastname</th>";
$display_string .= "<th>gender</th>";
$display_string .= "<th>email</th>";
$display_string .= "</tr>";

// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)){
   $display_string .= "<tr>";
   $display_string .= "<td>$row[fn]</td>";
   $display_string .= "<td>$row[ln]</td>";
   $display_string .= "<td>$row[gn]</td>";
   $display_string .= "<td>$row[em]</td>";
   $display_string .= "</tr>";
}

echo "Query: " . $query . "<br />";
$display_string .= "</table>";

echo $display_string;
?>