<?php
    error_reporting(E_ERROR  | E_PARSE);

$conn = new mysqli("localhost","root","","gpp");
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql = 'SELECT * FROM users';
	
$result = $conn->query($sql);
// echo $result;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    }
} else {
}
}

?>