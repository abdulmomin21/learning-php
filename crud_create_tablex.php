<?PHP
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'intu';

$conn = new mysqli($hostname, $username, $password, $dbname);
if($conn->connect_error){
    echo $conn->connect_error;
}
$sql = "CREATE TABLE class(
id INT(6) AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(40),
lastname VARCHAR(40),
email VARCHAR(35)
)";
if($conn->query($sql) == TRUE){
    echo "created";
}else{
    echo $conn_error;
}

$conn->close();
?>