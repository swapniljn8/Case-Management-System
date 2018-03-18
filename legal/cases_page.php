<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?>
<?php include 'header.php'; ?>
<center>
   <input type="button" onclick="window.location='home_page.php'" value="Back">
   <br> <br>
   <input type="button"   onclick="location.href='new_case.php';" value="New Case Entry"/>&nbsp &nbsp
   <input type="button"   onclick="location.href='view_by.php';" value="View Existing Cases"/>&nbsp &nbsp	
   <input type="button"   onclick="location.href='select_case_number.php';" value="Edit/Update an Existing Case"/>
   </center>
   <?php include 'footer.php' ?>