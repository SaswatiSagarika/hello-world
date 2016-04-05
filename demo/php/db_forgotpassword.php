<?php
/**
* File name: db_forgotpassword.
* File type: php.
* Date of  creation:3rd April 2016.
* Purpose: this php file takes email as input and checks if its present or not.
            If present then it sends the password to the email
* Author:mindfire Solutions.
* Path:D:\Projects\hello-world\demo\php.
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
        
    $email= validate_data( $conn, $_POST['email'] );
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email";
    } else {
        $sql = "SELECT password FROM login WHERE email ='$email'";
        $result = $conn->query($sql);
        $Results = mysqli_fetch_array($result);
        if($result->num_rows == 1) {
               //echo $Results['password'];
            $message = "Your password reset link send to your e-mail address.";
            $to = $email;
            $subject = "Forget Password";
            
            $body='Hi,
                    Your email is '.$email.'<br>
                    your password is '. $Results['password'].'<br>
                    your faithfully';
            $mail = mail($to, $subject, $body);
            if($mail){
                $response['data'] = "1";
                $response['message'] = "mail is send successfully.";
                echo json_encode($response);
            } else {
                $response['message'] = "invalid email address";
                echo json_encode($response);
            }
        }
    }
?>