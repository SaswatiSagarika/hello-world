/**
*File name: bs_loadupdate.
*File type: js.
*Date of  creation:23rd march 2016.
*Purpose: this page contains javascript file for bootstrap_load update.html page.
*Path:D:\Projects\hello-world\demo\js.
*Author:mindfire Solutions
**/
$(".id").hide();
$(".hi").hide(); //hides the id input box
var row_index;
/**
* it shows the data of selected row in the form input.
* @param json e
* @param object row
* @returns:selected Object.
**/
$('#mytable').bootstrapTable({
    onClickRow: function (e, row, $element) {
        row_index = $(this).parent().index('tr');
        $(row).addClass('active').siblings().removeClass('active');//high-light the selected row.
        $('input[name="id"]').val(e["id"]);
        $('input[name="firstname"]').val(e["firstname"]);
        $('input[name="lastname"]').val(e["lastname"]);
        $('input[name="gender"]').val(e["gender"]);
        $('input[name="email"]').val(e["email"]);
    }
});
/**
* helps in inserting data into table and show it in new row.
*  @param json personObject.
* @param string string_object.
* @param integer i.
* @param integer indexlength with a *description* it stores the index value of the last row.
* @filesource db_insert.php.
* @returns:data in row.
**/
function insertForm() {
    
    var personObject = {};
    var string_object = $("form").serializeArray();
    
    for(var i = 0; i < string_object.length; i++) {
        personObject[string_object[i].name] = string_object[i].value;
        
    }
    $indexlength = $("#mytable").bootstrapTable('getData').length;
    
    $.ajax({
        type: "PUT",
        url: "php/db_index.php",
        data: personObject,
        success: function(html) {
            
            personObject.id = JSON.parse(html).data.id;
            $('#mytable').bootstrapTable('insertRow', {index: $indexlength, row:personObject});
           // $('#mytable').bootstrapTable('updateCell', {index: $indexlength, fieldname: id, value:personObject.id});
        }
    })
    
}
/**
* helps in delete data from the row and row itself.
* @param json personObject.
* @param string string_object.
* @param integer i.
* @filesource db_delete.php.
* @returns:data in row.
**/
 function deleteForm() {
    var personObject = {};
    var string_object = $("form").serializeArray();
    for(var i = 0 ; i < string_object.length; i++) {
        personObject[string_object[i].name] = string_object[i].value;
       
    }

    
    if(confirm("Are you sure you want to delete this?")) {

        $.ajax({
            type: "DELETE",
            url: "php/db_index.php",
            data: personObject,
            success: function(){
                //personObject.id = JSON.parse(html).data;
                $('#mytable').bootstrapTable('removeByUniqueId', personObject.id);//remove the deleted row.
            }
       });
    }
    return false;
}
/**
* helps in updating data and show it in new row.
* @param json personObject.
* @param string string_object.
* @param integer i.
* @param integer indexlength.
* @filesource db_update.php.
* @returns data in row.
**/
function updateForm() {
   
    //var row_index = $(this).parent().index('tr');
    var personObject = {};
    var string_object = $("form").serializeArray();
    $indexlength = $("#mytable").bootstrapTable('getData').length;
    //$index = $table.bootstrapTable('getSelections').val;
    for(var i = 0 ; i < string_object.length ; i++) {
        personObject[string_object[i].name] = string_object[i].value;
    }
    
    $.ajax({
        type: "POST",
        url: "php/db_index.php",
        data: personObject,
        success: function(html) {
           
           $('#mytable').bootstrapTable('updateByUniqueId', {id:personObject.id, row: personObject});
        }
    })

}

$(".alert").hide();//hide the alert.
//
///**
//* it checks the input value  given in the input field and reflects the error.
//* @returns:bootstrap alert in case of error.
//**/
//function validate()
//{ 
//
//    var error="";
//    
//    var fnname = document.getElementById( "firstname" );
//    if( fnname.value == "" )
//    {
//     
//       $("#first").show();
//        //document.getElementById( "error_para" ).innerHTML = error;
//        return false;
//    }
//    var error="";
//    var lsname = document.getElementById( "lastname" );
//    if( lsname.value == "" )
//    {
//       $("#last").show();
//        //document.getElementById( "error_para" ).innerHTML = error;
//        return false;
//    }
//        
//    var gender = document.getElementById( "gender" );
//    if( gender.value == "male" && gender.value =="female" )
//    {
//       $("#gender").show();
//        //document.getElementById( "error_para" ).innerHTML = error;
//        return false;
//    }
//
//    var email = document.getElementById( "email" );
//    if( email.value == "")
//    {
//       $("#mail").show();
//        //document.getElementById( "error_para" ).innerHTML = error;
//        return false;
//    }
//    else
//    {
//        return true;
//    }
//
//}