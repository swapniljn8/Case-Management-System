<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
if(isset($_POST['dd3'])&&isset($_POST['mm3'])&&isset($_POST['yyyy3'])){
	$nirnay_date=$_POST['dd3']."-".$_POST['mm3']."-".$_POST['yyyy3'];
}else{
	$nirnay_date='';
}
if(isset($_POST['dd4'])&&isset($_POST['mm4'])&&isset($_POST['yyyy4'])){
	$compliance_from_date=$_POST['dd4']."-".$_POST['mm4']."-".$_POST['yyyy4'];
}else{
	$compliance_from_date='';
}
if(isset($_POST['dd2'])&&isset($_POST['mm2'])&&isset($_POST['yyyy2'])){
	if(isset($_POST['description'])){
			$prakran_date=$_POST['dd2']."-".$_POST['mm2']."-".$_POST['yyyy2'];
			$prakran=$_POST['dd2']."-".$_POST['mm2']."-".$_POST['yyyy2']." ".$_POST['description'];
	}else{
		$prakran_date='';
		$_POST['description']='';
	}

}else{
	$prakran_date='';
	$_POST['description']='';
}
if(!isset($_POST['favour'])){
	$_POST['favour']='';
}
if($_POST['days']==''){
	$_POST['days']=0;
}
if(!isset($_POST['department'])){
	$_POST['department']='';
}
if(!isset($_POST['appeal'])){
	$_POST['appeal']='';
}

if(isset($_POST['dd1'])&&isset($_POST['mm1'])&&isset($_POST['yyyy1'])){
	$javabakarta_date=$_POST['dd1']."-".$_POST['mm1']."-".$_POST['yyyy1'];
}else{
	$javabakarta_date='';
}
		
//echo "this is new case handler";
$message="";

$case_num = $_POST['case'];




include('serverconfig.php');

$query = "update cases set adhikari_name='{$_POST['adhikari_name']}', prakran_stithi=concat(prakran_stithi, '&#13;&#10;{$prakran}'),latest_prakran_date='{$prakran_date}',javabdawa_date='{$javabakarta_date}',anya_jankari='{$_POST['remarks']}',case_status='{$_POST['status']}', nirnay_date='{$nirnay_date}',favour='{$_POST['favour']}',compliance_period={$_POST['days']},compliance_from_date='{$compliance_from_date}',compliance_against_dept='{$_POST['department']}',appeal='{$_POST['appeal']}' where case_number='{$case_num}'";


$result=mysqli_query($conn,$query);

if($result>0){
	$message="Data Successfully Inserted";
}
else{
	$message="There is some error with the data . Not Inserted";
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








