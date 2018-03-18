<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?>
<!DOCTYPE html>
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
	border: 2px solid black;"
}
</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:950px; height:900px;">
   
  
   <div Style="font-size:35px; margin-top:50px; color:red;"><b>Case Management System</b></div>
   <img src="law.png" alt="logo" style="width:130px; height:130px; margin-bottom:15px;">
    <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b>Overall Summary</b> <br>
	<input type="button" onclick="window.location='cases_page.php'" value="Back to Home">
	</div>
	
	<table style=" border: 2px solid black;">
		<tr>
			<td colspan="6"  style=" border: 2px solid black;"> <center>Video Conferencing Summary</center> 
			</td>
			
		</tr>
		<tr  style=" border: 2px solid black;">
			<td>Category</td>
			<td >Total Cases Filed</td>
			<td>Total Cases Pending</td>
			<td>Total Cases Disposed</td>
			<td> Favoured as For</td>
			<td> Favoured as Against</td>
		</tr>
		
		<tr><td>SW</td>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>
		
		<tr><td> </td>
			<td>sum</td>
			<td>sum</td>
			<td>sum</td>
			<td>sum</td>
			<td>sum</td>
		</tr>
		
		<tr>
			<td colspan="6"><center><form><input type="button" value="Back" onclick="window.location='view_by.php'">	</center>
			</td>
		</tr>
	</table>
	<?php include 'footer.php'; ?>