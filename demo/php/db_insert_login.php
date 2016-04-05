<?php
/**
*File name: db_insertlogin.
*File type: php.
*Date of  creation:29th march 2016.
*Author:mindfire solutions.
*Purpose: this php file is for insert a row into database from register form.
*Path:D:\Projects\hello-world\demo\php.
**/
    require_once('config.php');
    $conn = new mysqli(DBHOST, DBUSERNAME, DBPASSWORD, DBNAME) ;
   
    function validate_data($conn, $data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = strip_tags($data);
      $data = htmlspecialchars($data);
      $data = mysqli_real_escape_string($conn, $data);
      return $data;    
    }
    
    $firstname = validate_data( $conn, $_POST['firstname'] );
    $lastname = validate_data( $conn, $_POST['lastname'] );
    $gender = validate_data( $conn, $_POST['gender'] );
    $email = validate_data( $conn, $_POST['email'] );
    $pass = validate_data( $conn, $_POST['password'] );
        
    $sqls ="SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($sqls);
    
    if($result->num_rows > 0) {
        $response['message'] = "email already exists";
         echo json_encode($response);
    }
    else {  
        $sql = "INSERT INTO login(firstname, lastname, gender, email, password) values('$firstname', '$lastname', '$gender','$email','$pass')";
        if ($conn->query($sql) === TRUE) {
            $response['message'] = "you are registered";
            $response['data'] = "1";
            echo json_encode($response);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
    