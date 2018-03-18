<?php
include 'serverconfig.php';
if(isset($_POST['submit'])) {
	$countRow = count($_POST['case_number']);
	for ($i = 0; $i < $countRow; $i++) {
		$sql = "UPDATE cases set 
		yachikakarta_name='" . $_POST["yachikakarta_name"][$i] .
		 "', case_number='" . $_POST["case_number"][$i] .
		  "', versus='" . $_POST["versus"][$i] .
		   "', niyukt_adhivakta_name='" . $_POST["niyukt_adhivakta_name"][$i] .
		    "', niyukt_adhivakta_mobile='" . $_POST["niyukt_adhivakta_mobile"][$i].
		    "', prabhari_adhikari_name='". $_POST["prabhari_adhikari_name"][$i].
		     "', prabhari_adhikari_mobile='" . $_POST["prabhari_adhikari_mobile"][$i].
		     "', prabhari_adhikari_post='" . $_POST["prabhari_adhikari_post"][$i].
		     "', javadava_present_date='" . $_POST["javadava_present_date"][$i];
		     "', prakran_date='" . $_POST["prakran_date"][$i];
		     "', nirnaya_copy_adhivakta_sent_date='" . $_POST["nirnaya_copy_adhivakta_sent_date"][$i];
		     "', nirnaya_date='" . $_POST["nirnaya_date"][$i];
		     "', remark='" . $_POST["remark"][$i];
		     "', case_type='" . $_POST["case_type"][$i];
		     "', approval_flag='" . $_POST["approval_flag"][$i];
		      "' WHERE case_number='" . $_POST["case_number"][$i] . "'");
		mysqli_query($conn, )
	}
	header("Location:show.php")
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Legal File System</title>

<script src="http://www.hinkhoj.com/common/js/keyboard.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.hinkhoj.com/common/css/keyboard.css" />

</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:650px;">
   
  
    <div Style="font-size:35px; margin-top:120px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
   <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Legal File System</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:50px;">
   
  <div>
  	<form action="edit_user.php" method="post">
  		<table>
  			<tr>
  				<th>
  					yachikakarta_name
  				</th>
  				<th>
  					case_number
  				</th>
  				<th>
  					versus
  				</th>
  				<th>
  					niyukt_adhivakta_name
  				</th>
  				<th>
  					niyukt_adhivakta_mobile
  				</th>
  				<th>
  					prabhari_adhikari_name
  				</th>
  				<th>
  					prabhari_adhikari_mobile
  				</th>
  				<th>
  					prabhari_adhikari_post
  				</th>
  				<th>
  					javadava_present_date
  				</th>
  				<th>
  					prakran_date
  				</th>
  				<th>
  					nirnaya_copy_adhivakta_sent_date
  				</th>
				<th>
  					nirnaya_date	
  				</th>
  				<th>
  					remark
  				</th>
  				<th>
  					case_type
  				</th>
  				<th>
  					approval_flag
  				</th>
  			</tr>
  		
   	    <?php
   	    	$rowCount = count($_POST['users']);
   	    	for($i = 0; i < $rowCount; $i++) {
   	    		?>
   	    		<tr>
   	    		<?php
   	    		$sql = "SELECT * FROM cases WHERE case_number = '".$_POST["users"][$i]."'");
				$result = mysqli_query($conn, $sql);
				$row[$i] = mysqli_fetch_assoc($result);
				?>
				<td>
					<input type="text" name="yachikakarta_name[]" value="<?php echo $row[$i]['yachikakarta_name']; ?>"> 
				</td>
				<td>
					<input type="hidden" name="case_number[]" value = "<?php echo $row[$i]['case_number'];?>">
					<input type="text" name="case_number" value="<?php echo $row[$i]['case_number'] ?>">
				</td>

				<td>
					<input type="text" name="versus[]" value="<?php echo $row[$i]['versus']; ?>">
				</td>

				<td>
					<input type="text" name="niyukt_adhivakta_name[]" value="<?php echo $row[$i]['niyukt_adhivakta_name']; ?>">
				</td>
				<td>
					<input type="text" name="niyukt_adhivakta_mobile[]" value="<?php echo $row[$i]['niyukt_adhivakta_mobile']; ?>" >
				</td>
				<td>
					<input type="text" name="prabhari_adhikari_name" value="<?php echo $row[$i]['prabhari_adhikari_name']; ?>">
				</td>
				<td>
					<input type="text" name="prabhari_adhikari_mobile[]" value="<?php echo $row[$i]['prabhari_adhikari_mobile']; ?>">
				</td>

				<td>
					<input type="text" name="prabhari_adhikari_post[]" value="<?php echo $row[$i]['prabhari_adhikari_post'];?>">
				</td>
				<td>
					<input type="text" name="javadava_present_date[]" value="<?php echo $row[$i]['javadava_present_date'];?>">
				</td>
				
				<td>
					<input type="text" name="prakran_date[]" value="<?php echo $row[$i]['prakran_date'];?>">
				</td>
				
				<td>
					<input type="text" name="nirnaya_copy_adhivakta_sent_date[]" value="<?php echo $row[$i]['nirnaya_copy_adhivakta_sent_date'];?>">
				</td>

				<td>
					<input type="text" name="nirnaya_date[]" value="<?php echo $row[$i]['nirnaya_date'];?>">
				</td>

				<td>
					<input type="text" name="remark[]" value="<?php echo $row[$i]['remark'];?>">
				</td>

				<td>
					<input type="text" name="case_type[]" value="<?php echo $row[$i]['case_type'];?>">
				</td>

				<td>
					<input type="text" name = "approval_flag[]" value="<?php echo $row[$i]['approval_flag'];?>">
				</td>
			</tr>
		<?php
   	    	}
		?>
   	    </table>
  </div>
 
 
</div>
</center>
</body>
</html>