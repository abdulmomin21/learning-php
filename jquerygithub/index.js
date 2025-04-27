

function OnSaveUpdate()
{
    var user_name = $("#user_name").val();
    var user_email = $("#user_email").val();
    var user_dept = $("#user_dept").val();
    var user_section = $("#user_section").val();
    var hidden_id = $("#hidden_id").val();
    if(hidden_id)// hiddden jodi thake tahole update hobe 
    {
       
        $.ajax({
            url:"onUpdate.php",
            method:"POST",
            data:{user_name:user_name,user_email:user_email,user_dept:user_dept,user_section:user_section,hidden_id:hidden_id},
            success:function(res)
            {
                 $("#hidden_id").val(hidden_id)
                alert(res);
                OnSelect();
                $("#TextTitle").html("Update");
                var user_name = $("#user_name").val('');
                var user_email = $("#user_email").val('');
                var user_dept = $("#user_dept").val('');
                var user_section = $("#user_section").val('');
                var hidden_id = $("#hidden_id").val('');
                
            }
        })
    }else{ // Insert 
        $("#TextTitle").html("Save");
        $("#hidden_id").val('');
        $.ajax({
            url:"OnInsert.php",
            method:"POST",
            data:{user_name:user_name,user_email:user_email,user_dept:user_dept,user_section:user_section},
            success:function(res)
            {
                alert(res);
                OnSelect();
                $("#hidden_id").val('')
            }
        })
    }
   
   
}

function OnSelect()
{
    $.ajax({
        url:"OnSelect.php",
        method:"GET",
        
        success:function(res)
        {
         $("#result").html(res);
        }
    }) 
}
window.addEventListener('load',function(){
    OnSelect();
});

function OnDelete(id)
{
    $.ajax({
        url:"OnDelete.php",
        method:"GET",
        data:{id:id},
        success:function(res)
        {
          alert(res);
          OnSelect();
        }
    })    
}

// for update 
function OnUpdate(id)
{
  $("#exampleModal").modal('show');
  $("#hidden_id").val(id);
  $("#TextTitle").html("Update");
  $.ajax({
    url:"OnUserSelectForUpdate.php",
    method:"GET",
    data:{id:id},
    success:function(data)
    {
        var Obj = JSON.parse(data);
        var user_name = $("#user_name").val(Obj.user_name);
        var user_email = $("#user_email").val(Obj.user_email);
        var user_dept = $("#user_dept").val(Obj.user_dept);
        var user_section = $("#user_section").val(Obj.user_section);

    }
  })
}