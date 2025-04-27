<?php
require 'User.php';
$user = new User("localhost","root","","student_info");
$response = $user->OnSelect();
$i=1;
$sectionArr = array(1=>"A",2=>"B",3=>"C");
foreach($response as $row)
{
    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['user_name']; ?></td>
        <td><?php echo $row['user_email'] ?></td>
        <td><?php echo $row['user_dept']; ?></td>
        <td><?php echo $sectionArr[$row['user_section']]; ?></td>
        <td><button onclick="OnDelete(<? echo $row['id'] ?>)" class='btn btn-danger'>DELETE</button></td>
        <td><button onclick="OnUpdate(<? echo $row['id'] ?>)" class='btn btn-primary'>Update</button></td>
    </tr>

    <?php
    $i++;
}

?>