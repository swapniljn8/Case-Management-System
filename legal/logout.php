<?php 
session_start();
session_destroy();
mysqli_close();
header('Location: index.php');
?>