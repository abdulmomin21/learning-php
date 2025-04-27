<?php
 require 'User.php';
 $user = new User("localhost","root","","student_info");
 $name =  $_POST['user_name'];
 $email =  $_POST['user_email'];
 $dept=  $_POST['user_dept'];
 $section =  $_POST['user_section'];
 $insert = $user->OnUserInsert($name,$email,$dept,$section);
 if($insert)
 {
    echo "Data Insert Success";
 }else{
    echo "data insert Failed";
 }

?>