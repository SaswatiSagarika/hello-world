/**
*File name: db_login.
*File type: js.
*Date of  creation:29th march 2016.
*Author:mindfire solutions.
*Purpose: this page contain javascript for login php page.
*Path:D:\Projects\hello-world\demo\js.
**/

/**
* helps in inserting data into table and show it in new row.
* @param json personObject.
* @param string string_object.
* @param integer i.
* @filesource db_insertlogin.php.
* @returns:data in row.
**/
function insertForm() {
    
        var personObject = {};
        var string_object = $("form").serializeArray();
        
        for(var i = 0; i < string_object.length; i++) {
            personObject[string_object[i].name] = string_object[i].value;
            
        }
        
        $.ajax({
            type: "POST",
            url: "php/db_insert_login.php",
            data: personObject,
            success: function(response) {
                var jsonData = JSON.parse(response);
                var string = jsonData.message;
                alert(string);
                if (jsonData.data == "1") {
                    $window = window.open("http://localhost/hello-world/demo/db_login_homepage.php","_self");
                }
            }
        })
    
}
/**
* it takes email and password as input and checks if it present or not in the database.
* @param var email.
* @param var password.
* @filesource db_insertselect.php.
* @returns:data in row.
**/
function select() {
   var personObject={};
    var string_object = $("form").serializeArray();
    
    for(var i = 0; i < string_object.length; i++) {
        personObject[string_object[i].name] = string_object[i].value;
    }
   
    $.ajax({
        type: "POST",
        url: "php/db_login_select.php",
        data: personObject,
        success: function(response) {
            if (JSON.parse(response).data == "1") {
                $window = window.open("http://localhost/hello-world/demo/db_login_homepage.php","_self");
            } else{
                alert("password or email is invalid");   
            }
        }
    })
}
/**
* it takes email and password as input and checks if it present or not in the database.
* @param var email.
* @param var password.
* @filesource db_forgotpassword.php.
* @returns:data in row.
**/
function getpassword() {
   var personObject={};
    var string_object = $("form").serializeArray();
    
    for(var i = 0; i < string_object.length; i++) {
        personObject[string_object[i].name] = string_object[i].value;
    }
   
    $.ajax({
        type: "POST",
        url: "php/db_forgotpassword.php",
        data: personObject,
        success: function(response) {
            var jsonData = JSON.parse(response);
                var string = jsonData.message;
                alert(string);
                if (jsonData.data == "1") {
                    $window = window.open("http://localhost/hello-world/demo/bootstrap_login.php","_self");
                }
            
        }
    })
}


$(".alert").hide();

/**
* it checks the input value  given in the input field and reflects the error.
* @returns:bootstrap alert in case of error.
**/
function validate()
{ 

    var error="";
    
    var fnname = document.getElementById( "firstname" );
    if( fnname.value == "" )
    {
     
       $("#first").show();
        //document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
    var error="";
    var lsname = document.getElementById( "lastname" );
    if( lsname.value == "" )
    {
       $("#last").show();
        //document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
    
    var email = document.getElementById( "email" );
    if( email.value == "" && email.value.indexOf( "@" ) == -1 )
    {
       $("#mail").show();
        //document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }
    
    var gender = document.getElementById( "gender" );
    if( gender.value == "male" && gender.value =="female" )
    {
       $("#gender").show();
        //document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }

    var password = document.getElementById( "password_of_user" );
    if( password.value == "" && password.value >= 8 )
    {
       $("#pass").show();
        //document.getElementById( "error_para" ).innerHTML = error;
        return false;
    }

    else
    {
        return true;
    }

}