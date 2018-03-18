<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?>
<?php include 'header.php' ?>
  <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b><?php echo $_POST['advocate_name'];?></b> <br>
	<input type="button" onclick="window.location='cases_page.php'" value="Back to Home">
	</div>
	
	<table style=" border: 2px solid black;">
		<tr>
			<td colspan="6"  style=" border: 2px solid black;"> <center>Case Pending</center> 
			</td>
		</tr>
	<?php
				error_reporting(E_ERROR | E_PARSE);
		include('serverconfig.php');
			
			$query_pending = "select * from cases where adhivakta_name = '{$_POST['advocate_name']}' and case_status = 'pending' order by case_year ASC";
			
			$result_pending = mysqli_query($conn,$query_pending);
			
			$num_of_rows_pending = mysqli_num_rows($result_pending);
			
			//echo $query_pending;
			//echo "num_of_rows_pending  ".$num_of_rows_pending;
		
	
if($num_of_rows_pending>0){	

		while($row = mysqli_fetch_array($result_pending)){
			
			$temp_array[]=$row;
		}
	
}

else{

	$msg= "No Message Found";	
}
	
	
		?>

		<tr  style=" border: 2px solid black;">
			<td>S.No</td>
			<td >Case Number</td>
		</tr>
		<?php 
		$j=0;$sno=1;
		for($j=0;$j<$num_of_rows_pending;$j++){
			
			$row = $temp_array[$j];
		//	echo $row['case_year'];
			$case_num = $row['case_number'];
		
		//echo $case_num;
		?>
		
		
		<tr><td><?php echo $sno; ?></td>
			<td><?php echo $case_num;?></td>
		
			
		</tr>
		<?php $sno++;
		}
		?>
	</table>

	<br>
		<br>
		<br>
		
		
			<table style=" border: 2px solid black;">
		<tr>
			<td colspan="6"  style=" border: 2px solid black;"> <center>Case Disposed</center> 
			</td>
			
		</tr>
		
		
		
		<tr  style=" border: 2px solid black;">
			<td>S.No</td>
			<td >Case Number</td>
			<td>Favour</td>
			<td>Nirnay Date</td>
		
		</tr>
		
			<?php
				
			
			$query_disposed = "select * from cases where adhivakta_name = '{$_POST['advocate_name']}' and case_status = 'disposed' order by case_year ASC";
			
			$result_disposed = mysqli_query($conn,$query_disposed);
			
			$num_of_rows_disposed = mysqli_num_rows($result_disposed);
			
	
if($num_of_rows_disposed>0){	

		while($row = mysqli_fetch_array($result_disposed)){
			
			$temp_array[]=$row;
		}
	
}

else{

	$msg= "No Data Found";	
}
	
	
	
	$j=0;$sno=1;
		for($j=0;$j<$num_of_rows_disposed;$j++){
			
			$row = $temp_array[$j];
					$case_num = $row['case_number'];
					$favour = $row['favour'];
					$nirnay=$row['nirnay_date'];
		
		?>
		
		<tr><td><?php echo $sno; ?></td>
			<td><?php echo $case_num;?></td>
			<td><?php echo $favour; ?></td>
			<td><?php echo $nirnay;?></td>
			
		</tr>
		
		<?php }?>
		
	</table>
	<br>
	<br>
	
<table style=" border: 2px solid black;">
		<tr>
			<td colspan="6"  style=" border: 2px solid black;"> <center>Overall Summary</center> 
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
		$query1 = "select distinct case_type from cases where adhivakta_name = '{$_POST['advocate_name']}'";

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
		
$j=0;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
			
			$var = $row['case_type'];
			
			$query_total_case = "select * from cases where case_type = '$var' and adhivakta_name = '{$_POST['advocate_name']}'";
			//echo $query_total_case."<br>";
			$result_total_case=mysqli_query($conn,$query_total_case);
			
			$num_of_rows_total = mysqli_num_rows($result_total_case);
			
			
			
			
			$query_pending_case = "select * from cases where case_type = '$var' and case_status='pending' and adhivakta_name = '{$_POST['advocate_name']}'";
			//echo $query_pending_case."<br>";
			$query_pending_case;
			
			$result_pending_case=mysqli_query($conn,$query_pending_case);
			
			$num_of_rows_pending = mysqli_num_rows($result_pending_case);
			
			
			
			$query_disposed_case = "select * from cases where case_type = '$var' and case_status='disposed' and adhivakta_name = '{$_POST['advocate_name']}'";
			
		//	echo $query_disposed_case."<br>";
			
			
			$result_disposed_case=mysqli_query($conn,$query_disposed_case);
			
			$num_of_rows_disposed = mysqli_num_rows($result_disposed_case);
			
			
			$query_for = "select * from cases where case_type = '$var' and favour='for' and adhivakta_name = '{$_POST['advocate_name']}'";
			
			$result_for=mysqli_query($conn,$query_for);
			
			$num_of_rows_for = mysqli_num_rows($result_for);
			
			
			
			
			$query_against = "select * from cases where case_type = '$var' and favour='against' and adhivakta_name = '{$_POST['advocate_name']}'";
			
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
		<?php }		
		$query_sum_total = "select * from cases where adhivakta_name = '{$_POST['advocate_name']}'";
		//echo $query_sum_total;
		$result_sum_total=mysqli_query($conn,$query_sum_total);
		$num_of_rows_sum_total=mysqli_num_rows($result_sum_total);
		
		$query_sum_pending = "select * from cases where adhivakta_name = '{$_POST['advocate_name']}' and case_status='pending'";
		//echo $query_sum_pending;
		$result_sum_pending=mysqli_query($conn,$query_sum_pending);
		$num_of_rows_sum_pending=mysqli_num_rows($result_sum_pending);
		
		$query_sum_disposed = "select * from cases where adhivakta_name = '{$_POST['advocate_name']}' and case_status='disposed'";
		//echo $query_sum_disposed;
		$result_sum_disposed=mysqli_query($conn,$query_sum_disposed);
		$num_of_rows_sum_disposed=mysqli_num_rows($result_sum_disposed);
		
		
		$query_sum_for = "select * from cases where adhivakta_name = '{$_POST['advocate_name']}' and favour='for'";
	//	echo $query_sum_for;
		$result_sum_for=mysqli_query($conn,$query_sum_for);
		$num_of_rows_sum_for=mysqli_num_rows($result_sum_for);
		
		$query_sum_against = "select * from cases where adhivakta_name = '{$_POST['advocate_name']}' and favour='against'";
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