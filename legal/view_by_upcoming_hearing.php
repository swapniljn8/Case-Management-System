<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
			error_reporting(E_ERROR | E_PARSE);
	$msg="";
	
		include('serverconfig.php');
		
	//date_default_timezone_set("New Delhi");
$date = date("d-m-Y");
$query1 = "select * from cases where latest_prakran_date > $date";
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
<?php include 'header.php' ?>
   <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b>Upcoming Hearings</b> <br>
	
		<input type="button" onclick="window.location='cases_page.php'" value="Back to Home">
	</div>
	
	<table style=" border: 2px solid black;">
		
		<tr  style=" border: 2px solid black;">
			<td>S.No</td>
			<td >Case Number</td>
			<td>Date</td>
			<td>Versus</td>
			<td>Advocate</td>
		</tr>
		
			
<?php
$j=0;$sno=1;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
					$case_num = $row['case_number'];
					$date1= $row['latest_prakran_date'];
					$versus=$row['versus'];
					$advocate = $row['adhivakta_name'];
		
		?>
		
		
		<tr><td><?php echo $sno; ?></td>
			<td><?php echo $case_num;?></td>
			<td><?php echo $date1;?></td>
			<td><?php echo $versus;?></td>
			<td><?php echo $advocate;?></td>
		</tr>
		
		<?php } ?>
		<tr>
			<td colspan="6"><center><form><input type="button" value="Back" onclick="window.location='view_by.php'"></center>
			</td>
		</tr>
	</table>
	
	
	
	
	
	
	
	</div>
	</center>
	</body>
	</html>