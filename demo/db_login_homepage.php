<?php
/**
*File name: db_login_homepage.php.
*File type: js.
*Date of  creation:29th march 2016.
*Author:mindfire solutions.
*Purpose: this page contain javascript for login html page.
*Path:D:\Projects\hello-world\demo\js.
**/

// If the user is not logged in send him/her to the login form
    session_start();
    if(empty($_SESSION['login_user']))
    {
        header('Location: http://localhost/hello-world/demo/bootstrap_login.php');
    }
?>
<!DOCTYPE html>
    
<html>
    <head>
        <title>PHP MySQL Insert Tutorial</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Form</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-table.css" rel="stylesheet">
        <link href="css/db_login_index.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h4>Welcome User</h4>
                <h3><a href="php/db_logout.php">logout</a><h3>
            </div>
            <div>
                <table data-toggle="table"
                data-url="php/db_select_ajax.php"
                data-show-toggle="true"
                id="mytable"
                class="bootstrapTable"
                data-search="true"
                data-unique-id="id"
                data-show-refresh="true"
                data-show-columns="true"
                data-height:"50"
                >
                    <thead>
                        <tr>
                            <th data-field="id" data-align="center" data-sortable="true">Id :</th>
                            <th data-field="firstname" data-align="center" data-sortable="true">First Name :</th>
                            <th data-field="lastname" data-align="center" data-sortable="true">Last Name :</th>
                            <th data-field="gender" data-align="center" data-sortable="true">Gender :</th>
                            <th data-field="email" data-align="center" data-sortable="true">Email :</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div>
                 <form action="" method="post" id="form" class="form" >
                    <h1>form</h1>
                    <p class="id">
                        <label class="control-label col-sm-1" for="id"> Id:</label>                   
                        <input type="text" class="form-control"  name="id" id="id" placeholder="id">
                    </p>
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="firstname"> First Name:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control"  name="firstname" id="firstname" placeholder="FirstName">
                                <div class="alert alert-info close" data-dismiss="alert" aria-label="close" id="first">
                                    <p>Write Your firstName..</p>
                                </div>
                            </div>                           
                            <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="LastName">
                                <div class="alert alert-info close" data-dismiss="alert" aria-label="close" id="first">
                                    <p>Write Your lastName..</p>
                                </div>                            
                                
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="gender">Gender:</label>
                            <div class="col-sm-4">
                                <input type="text" name="gender" id="gender" class="form-control"  placeholder="Gender">
                                <div class="alert alert-info close" data-dismiss="alert" aria-label="close" id="first">
                                    <p>Write male or female</p>
                                </div>
                            </div>		
                            <label class="control-label col-sm-2" for="email">Email address:</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="email" id="mail" placeholder="Email">
                                <div class="alert alert-info close" data-dismiss="alert" aria-label="close" id="first">
                                    <p>Write Val..</p>
                                </div>
                            </div>
                        </div>	
                    </div>
                    <div class="btn btn-group-primary btn-block">
                        <button type="button" class="btn btn-default active btn-info" name="update" id="update" onclick="updateForm()">Update</button>
                        <button type="button" class="btn btn-default active btn-danger" name="delete" id="delete" onclick="deleteForm()">Delete</button>
                        <button type="button" class="btn btn-default active btn-success" name="insert" id="insert" onclick="insertForm()">Insert</button>
                    </div>
                </form>
            </div>    
        </div>
        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.2.2.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-table.js"></script>
        <script src="js/bs_load_update.js"></script>
    </body>
</html>