function OnSaveUpdate()
{
    var user_name = $("#user_name").val();
    var user_email = $("#user_email").val();
    var user_dept = $("#user_dept").val();
    var user_section = $("#user_section").val();

    

    $.ajax({
        url:"OnInsert.php",
        method:"POST",
        data:{user_name:user_name,user_email:user_email,user_dept:user_dept,user_section:user_section},

        success:function(res)
        {
            alert(res)
        }
    }) 
}