function OnSaveUpdate()
{
    var user_name = $("#user_name").val();
    var user_email = $("#user_email").val();
    var user_dept = $("#user_dept").val();
    var user_section = $("#user_section").val();
    
    $.ajax({
        url:"OnInsert.php",
        method
    })
}