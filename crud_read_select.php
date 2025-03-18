<?PHP
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'momin';

$conn = new mysqli($hostname, $username, $password, $dbname);
if($conn->connect_error){
    echo $conn->connect_error;
}
$sql = "SELECT * FROM sector1";

$result = $conn->query($sql);

if($result->num_rows > 0){
   /* $row = $result->fetch_assoc(); */

   while($row = $result->fetch_assoc()){


        echo $row['id'].' '.$row['firstname'].' '.$row['lastname'].'
         '.$row['email']. '<br>';
   }
    }else{
        echo $conn->error;
    }

$conn->close();
?>