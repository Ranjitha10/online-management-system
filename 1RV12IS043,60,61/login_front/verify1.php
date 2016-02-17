<?php

session_start();
$host="localhost";
$user="root";
$pass="";
$db="wallet";



// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST['user'];
$password=$_POST['pass'];

$sql = "SELECT  name FROM wall_signup2 WHERE  password = $password ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	 $_SESSION["id"]=$row["name"];
	 header( "Location: yo.php" ); die;
        //echo "id: " . $row["name"]. " ";
    }
} else {
header( "Location: ero.php" ); die;
    echo "0 results";
}
$conn->close();
?>
