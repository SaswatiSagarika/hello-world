<?php
session_start();
session_unset(); 

if(session_destroy()) // Destroying All Sessions
{
header('Location: http://localhost/hello-world/demo/bootstrap_login.php');
}
