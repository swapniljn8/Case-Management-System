<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
		error_reporting(E_ERROR | E_PARSE);
	$msg="";
	
		include('serverconfig.php');

$query1 = "select * from cases where favour='against'";

$result1 = mysqli_query($conn,$query1);		
		
$num_of_rows = mysqli_num_rows($result1);

	//echo $num_of_rows;	
	
if($num_of_rows>0){	

		while($row = mysqli_fetch_array($result1)){
			
			$temp_array[]=$row;
		}
		
}

else{

	$msg= "No Message Found";	
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
   
  
   <div Style="font-size:35px; margin-top:50px; color:red"><b>Case Management System</b></div>
   <img src="law.png" alt="logo" style="width:130px; height:130px; margin-bottom:15px;">
    <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b>View By Compliance Date</b> <br>
	
		<input type="button" onclick="window.location='cases_page.php'" value="Back to Home">
	</div>
	
	<table style=" border: 2px solid black;">
		
		<tr  style=" border: 2px solid black;">
			<td>S.No</td>
			<td >Case Number</td>
			<td>Compliance Period (days)</td>
			<td>Last Date</td>
			<td>Against Department</td>
			<td>Compliance From Date</td>
			<td>Compliance To Date</td>
		</tr>
		
					
<?php
$j=0;$sno=1;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
					$case_num = $row['case_number'];
					$comliance= $row['compliance_period'];
					$against=$row['compliance_against_dept'];
					$compliance_from = $row['compliance_from_date'];
		
		?>

		
	<tr><td><?php echo $sno; ?></td>
			<td><?php echo $case_num;?></td>
			<td><?php echo $comliance;?></td>
			<td>last date</td>
			<td><?php echo $against;?></td>
			<td><?php echo $compliance_from;?></td>
			<td>compliance to</td>
		</tr>
		<?php } ?>
		
		<tr>
			<td colspan="7"><center><form><input type="button" value="Back" onclick="window.location='view_by.php'"></center>
			</td>
		</tr>
	</table>
	
	
	
	
	
	
	
	</div>
	</center>
	</body>
	</html>