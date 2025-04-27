<?php
require 'User.php';
$user = new User("localhost","root","","student_info");
$id = $_GET['id'];
$response = $user->OnSelectUpdate($id);
$row =  $response->fetch_assoc();
echo json_encode($row);

?>