<?php 
$servername ="localhost";
$username ="root";  
$password ="root123";
$dbname ="legal_new";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn) {
	//echo "<br>connection successfull";
}
else {
echo "Error Connecting to the database";
}	
?>