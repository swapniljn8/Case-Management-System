<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
		
		$case_number=$_POST['case_type']."/".$_POST['case_no']."/".$_POST['case_year'];
		$_SESSION['case_number'] = $case_number;
		//echo $case_number."<br>";
		//echo $_SESSION['case_number']."<br>";
		
		include('serverconfig.php');
		
		$query ="select * from cases where case_number = '$case_number'";
		
		$result = mysqli_query($conn,$query);
		
		$num_of_rows = mysqli_num_rows($result);
		if($num_of_rows>0){
		//echo "data found";
			while($row = mysqli_fetch_array($result)){
				
				$temp_array[]=$row;
			}
		}
		else{
			//echo "no data found";
		}
		
		$j=0;
		for($j=0;$j<$num_of_rows;$j++){
			
			$row = $temp_array[$j];
			$yachikakarta_name = $row['yachikakarta_name'];
			$versus = $row['versus'];
			$advocate= $row['adhivakta_name'];
			$adhikari = $row['adhikari_name'];
			$prakran_stithi = $row['prakran_stithi'];
			$latest_prakran_date = $row['latest_prakran_date'];
			$javabdawa_date = $row['javabdawa_date'];
			$anya_jankari = $row['anya_jankari'];
			$case_status=$row['case_status'];
			$nirnay_date = $row['nirnay_date'];
			$favour=$row['favour'];
			$compliance_period=$row['compliance_period'];
			$compliance_from_date=$row['compliance_from_date'];
			$compliance_against_dept=$row['compliance_against_dept'];
			$appeal=$row['appeal'];
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
<div style="border:5px solid black; width:950px; height:900px;">
   
  
   <div Style="font-size:45px; margin-top:50px; color:red"><b>Case Management System</b></div>
   <img src="law.png" alt="logo" style="width:130px; height:130px; margin-bottom:15px;">
    <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b>विस्तार</b> <br>
	<input type="button" onclick="window.location='cases_page.php'" value="Back to Home">
	
	</div>
	
<!--<form action="view_case_handler.php" method="POST"> 	-->
	<form action="view_to_excel.php" method="POST">
	<table>
		<tr>
			<td><div style="float: left">याचिका क्रमांक/ प्रकरण क्रमांक/ रिव्यु/ अपील :</div>
			</td>
			
			<td>
				<table>
					<tr>
						<td>	
						<input type="text" name="case_number" style="width: 300px;"readonly value="<?php echo $case_number; ?>">
				
  				&nbsp;&nbsp;
							
						</td>
					</tr>
				</table>
			</td>
		</tr>	
			
		<tr>
			<td><div style="float: left">याचिकाकर्ता का नाम:</div>
			</td>
			
			<td>
				<input type="text" name="yachikakarta_name"style="width: 300px;" readonly value="<?php echo $yachikakarta_name; ?>">
				
			</td>
		
		
		</tr>
			
		<tr>
			<td>
				<div style="float: left">विरुद्ध:</div>
			</td>
			
			<td>
				<input type="text" name="versus" style="width: 300px;"readonly value="<?php echo $versus;?>">
				
			</td>
		</tr>
		
		<tr>
			<td>
				<div style="float: left">प्रकरण में नियुक्त अधिवक्ता का नाम:</div>
			</td>
			
			<td>
				<input type="text" name="adhivakta_name" style="width: 300px;"readonly value="<?php echo $advocate;?>">
				
			</td>
		</tr>
			
		<tr>
			<td>
					<div style="float: left">प्रभारी अधिकारी का नाम:</div>	
			</td>
			
			<td>
				<input type="text" name="adhikari_name" readonly style="width: 300px;" value="<?php echo $adhikari; ?>">
				
			</td>
		</tr>	
			
		<tr>
			<td>
					<div style="float: left">प्रकरण की स्थिति:</div> 
			</td>
			<td>
				<textarea name="history" rows="3" cols="40" readonly ><?php echo $prakran_stithi; ?></textarea>
			</td>
		</tr>	
			
	

			
		<tr>
			<td>
				<div style="float: left">जवाबदावा प्रस्तुत दिनांक:</div>
			</td>
				
			<td>
				<input type="text" name="date"style="width: 300px;" readonly value="<?php echo $javabdawa_date; ?>">
				
			</td>
		</tr>	
		
		
		
			
		<tr>
			<td>
				केस स्टेटस
			</td>
			
			<td>
				<input type="text" name="status"style="width: 300px;" readonly value="<?php echo $case_status;?>">
			</td>
		</tr>
		<tr>
			<td>	निर्णय दिनांक
			</td>
			
			<td>
				<input type="text" name="date" style="width: 300px;"readonly value="<?php echo $nirnay_date;?>">
			</td>
			
		</tr>
		<tr>
			<td>
				फेवर
			</td>
			<td>
				<input type="text" name="favour"style="width: 300px;" readonly value="<?php echo $favour;?>">
			</td>
		</tr>
		
		<tr>
			<td>
				Compliance Period
			</td>
			
			<td>
				<input type="number" name="days" style="width: 300px;"readonly value="<?php echo $compliance_period;?>">&nbsp; days &nbsp;
			</td>
		</tr>
		
		<tr>
			<td>
				Compliance against Department
			</td>
			
			<td>
				<input type="text" name="department" style="width: 300px;"readonly value="<?php echo $compliance_against_dept; ?>">
				
			</td>
		</tr>
		<tr>
			<td>
				<div style="float: left">अन्य जानकारी:</div>
			</td>
			
			<td>
				<input type="text" name="remarks"style="width: 300px;" readonly value="<?php echo $anya_jankari;?>">
			</td>
		</tr>
		
		<tr>
			<td>
				Appeal 
			</td>
			
			<td>	
				<input type="radio"disabled name="appeal" value="no" <?php if($appeal == 'no'){echo "checked";}?> />NO
				<input type="radio" disabled <?php if($appeal == 'yes'){echo "checked";}?> name="appeal" value="yes" />YES
			
					
			</td>
		</tr>
		
		
		
		
		<tr>
			<td>
				
			</td>
				
			<td>
				<table>
					<tr>
						<td>
						<input type="button" value="Back" onclick="window.location='view_by.php'">
						</form>	
						</td>
			
					</tr>
				</table>
			</td>
			</td>
		</tr>
	</table>
	
	
	</form>
	
	
	
	
	
	
	
	</div>
	</center>
	</body>
	</html>