<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?><?php
echo "view_case_handler this page will download case details download "
?>