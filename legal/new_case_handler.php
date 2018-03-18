<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}

		
//echo "this is new case handler";
$message="";

$case_num = $_POST['case_type']."/".$_POST['case_no']."/".$_POST['case_year'];



$prakran_date=$_POST['dd2']."-".$_POST['mm2']."-".$_POST['yyyy2'];
$prakran=$_POST['dd2']."-".$_POST['mm2']."-".$_POST['yyyy2']." ".$_POST['description'];
$javabakarta_date=$_POST['dd1']."-".$_POST['mm1']."-".$_POST['yyyy1'];

include('serverconfig.php');

$query = "INSERT INTO cases VALUES ('{$_POST['case_year']}','{$_POST['case_type']}','$case_num','{$_POST['yachikakarta_name']}','{$_POST['versus']}','{$_POST['adhivakta_name']}','{$_POST['adhikari_name']}','$prakran','$prakran_date','$javabakarta_date','{$_POST['remarks']}','pending','','',0,'','','')";

echo $query;

$result=mysqli_query($conn,$query);

if($result>0){
	$message="Data Successfully Inserted";
}
else{
	$message="There is some error with the data(Data may already be presesnt) . Not Inserted";
}
?><!DOCTYPE html>
<html>
<head>
<title>Legal File System</title>
<script src="hindi.js"></script>


<link rel="stylesheet" type="text/css" href="view.css" />
<style>

table {
    border-collapse: collapse;
}

td {
    padding-top: .2em;
    padding-bottom: .2em;
}
</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:950px; height:600px;">
   
   <div Style="font-size:45px; margin-top:50px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
   <div Style="font-size:35px; margin-top:10px; color:red; margin-bottom:10px;"><b>File Tracking System</b></div>
   <img src="logo.png" alt="logo" style="width:130px; height:130px; margin-bottom:15px;"><br><br>
    <div style="color:RED;font-size:25px "> 
	<center>
<input type="button" onclick="window.location='cases_page.php'" value="Back" ><br><br>
 	<b><?php echo $message;?></b>
	
	</div>
			</center>
	
	</body>
	</html>
?>