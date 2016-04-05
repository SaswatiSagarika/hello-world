<!DOCTYPE html>
    
<html>
    <head>
        <title>PHP MySQL Insert Tutorial</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap Form</title>
       
           <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-table.css" rel="stylesheet">
        <link href="css/bootstrap_login.css" rel="stylesheet">
            
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form class="login-form" id="loginform" action="" method="POST">
                <div class="row">
                    <div class="header"><h3>forgot password</h3></div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="email" id="email" placeholder="Email">
                        <div class="alert alert-danger close" data-dismiss="alert" aria-label="close" id="pass">
                            password is successfully sent to email address.
                        </div>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary active" value="submit" onclick="getpassword()">Submit</button>
                        <br><b>back to login page..</b><a href="bootstrap_login.php">click here</a>                        
                    </div>
                </div>    
            </form>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-table.js"></script>
        <script src="js/db_login.js"></script>
    </body>
</html>
                