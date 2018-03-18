<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
		error_reporting(E_ERROR | E_PARSE);
	$msg="";
	
		include('serverconfig.php');

$query1 = "select distinct case_type from cases where case_year='{$_POST['yyyy']}'";

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
	border: 2px solid black;"
}
</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:950px; height:900px;">
   
  
   <div Style="font-size:45px; margin-top:20px; color: red"><b>Case Management System</b></div>
   <img src="law.png" alt="logo" style="width:130px; height:130px; margin-bottom:15px;">
    <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b>YEAR : <?php echo $_POST['yyyy'];?></b> <br>
		<input type="button" onclick="window.location='cases_page.php'" value="Back to Home">
	</div>
	
	<table style=" border: 2px solid black;">
		<tr>
			<td colspan="6"  style=" border: 2px solid black;"> <center>Summary : <?php echo $_POST['yyyy']?></center> 
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
	
<?php
		$j=0;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
			
			$var = $row['case_type'];
			
			$query_total_case = "select * from cases where case_type = '$var'";
			//echo $query_total_case."<br>";
			$result_total_case=mysqli_query($conn,$query_total_case);
			
			$num_of_rows_total = mysqli_num_rows($result_total_case);
			
			
			
			
			$query_pending_case = "select * from cases where case_type = '$var' and case_status='pending'";
			//echo $query_pending_case."<br>";
			$query_pending_case;
			
			$result_pending_case=mysqli_query($conn,$query_pending_case);
			
			$num_of_rows_pending = mysqli_num_rows($result_pending_case);
			
			
			
			$query_disposed_case = "select * from cases where case_type = '$var' and case_status='disposed'";
			
		//	echo $query_disposed_case."<br>";
			
			
			$result_disposed_case=mysqli_query($conn,$query_disposed_case);
			
			$num_of_rows_disposed = mysqli_num_rows($result_disposed_case);
			
			
			$query_for = "select * from cases where case_type = '$var' and favour='for'";
			
			$result_for=mysqli_query($conn,$query_for);
			
			$num_of_rows_for = mysqli_num_rows($result_for);
			
			
			
			
			$query_against = "select * from cases where case_type = '$var' and favour='against'";
			
	$result_against=mysqli_query($conn,$query_against);
			
			$num_of_rows_against = mysqli_num_rows($result_against);
			
		//	echo $j." ".$row['case_type']."<br>";
		
		

?>

	
		<tr><td><?php echo $var;?></td>
			<td><?php echo $num_of_rows_total;?></td>
			<td><?php echo $num_of_rows_pending;?></td>
			<td><?php echo $num_of_rows_disposed?></td>
			<td><?php echo $num_of_rows_for;?></td>
			<td><?php echo $num_of_rows_against;?></td>
		</tr>
		
		<?php 
		}
		
		
		$query_sum_total = "select * from cases where case_year='{$_POST['yyyy']}'";
		//echo $query_sum_total;
		$result_sum_total=mysqli_query($conn,$query_sum_total);
		$num_of_rows_sum_total=mysqli_num_rows($result_sum_total);
		
		$query_sum_pending = "select * from cases where case_year='{$_POST['yyyy']}' and case_status='pending'";
		//echo $query_sum_pending;
		$result_sum_pending=mysqli_query($conn,$query_sum_pending);
		$num_of_rows_sum_pending=mysqli_num_rows($result_sum_pending);
		
		$query_sum_disposed = "select * from cases where case_year='{$_POST['yyyy']}' and case_status='disposed'";
		//echo $query_sum_disposed;
		$result_sum_disposed=mysqli_query($conn,$query_sum_disposed);
		$num_of_rows_sum_disposed=mysqli_num_rows($result_sum_disposed);
		
		
		$query_sum_for = "select * from cases where case_year='{$_POST['yyyy']}' and favour='for'";
	//	echo $query_sum_for;
		$result_sum_for=mysqli_query($conn,$query_sum_for);
		$num_of_rows_sum_for=mysqli_num_rows($result_sum_for);
		
		$query_sum_against = "select * from cases where case_year='{$_POST['yyyy']}' and favour='against'";
	//	echo $query_sum_against;
		$result_sum_against=mysqli_query($conn,$query_sum_against);
		$num_of_rows_sum_against=mysqli_num_rows($result_sum_against);
		
		?>
		<tr><td>Sum</td>
			<td><?php echo $num_of_rows_sum_total;?></td>
			<td><?php echo $num_of_rows_sum_pending; ?></td>
			<td><?php echo $num_of_rows_sum_disposed;?></td>
			<td><?php echo $num_of_rows_sum_for;?></td>
			<td><?php echo $num_of_rows_sum_against;?></td>
		</tr>
		<tr>
			<td colspan="6"><center><form><input type="button" value="Back" onclick="window.location='view_by.php'"></center>
			</td>
		</tr>
	</table>
	
	</div>
	</center>
	</body>
	</html>