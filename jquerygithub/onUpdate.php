<?php
require 'User.php';
$user = new User("localhost","root","","student_info");
$name =  $_POST['user_name'];
$email =  $_POST['user_email'];
$dept=  $_POST['user_dept'];
$section =  $_POST['user_section'];
$update_id = $_POST['hidden_id'];
$uopdateCheck = $user->OnUpdate($name,$email,$dept,$section,$update_id);
if($uopdateCheck)
{
    echo "Update Success";
}else{
    echo "Update Failed";
}
?>