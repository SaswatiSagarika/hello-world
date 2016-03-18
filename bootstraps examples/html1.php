<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindfire";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM persons";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
		
?>
<table class="table table-bordered"><thead>
<tr>
	<th>id</th>
	<th>firstname</th>
	<th>lastname</th>
	<th>gender</th>
	<th>email</th>
</tr>
</thead>

<?php

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		
		
	
	echo "<tr>";
        echo "<td>" . $row["id"]. "</td> <td>" . $row["firstname"]. "</td> <td> " . $row["lastname"]. "</td> <td> " .$row["gender"]. "</td> <td> " .$row["email"]."</td>";
	echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</table>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
</body>
</html>