<?php
require 'User.php';
$user = new User("localhost","root","","student_info");
 $id = $_GET['id'];
$deleteSql= $user->OnDelete($id);
if($deleteSql)
{
    echo "Deleted";
}else{
    echo "Failed";
}
?>