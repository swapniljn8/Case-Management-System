<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?>
<?php include 'header.php' ?>
    <div>
   <input type="button"   onclick="location.href='cases_page.php';" value="Cases"/>&nbsp &nbsp
   <input type="button"   onclick="location.href='logout.php';" value="Logout"/>&nbsp &nbsp	
   </div>
 
 <?php include 'footer.php' ?>