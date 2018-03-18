<?php
session_start();
include 'serverconfig.php';
if (isset($_POST['submit'])) {
   $yachikakarta_name = $_POST['yachikakarta_name'];
	$case_number = $_POST['case_number'];
	$virudh = $_POST['virudh'];
	$niyukt_adhivakta_name = $_POST['niyukt_adhivakta_name'];
	$niyukt_adhivakta_mobile = $_POST['niyukt_adhivakta_mobile'];
	$prabhari_adhikari_name = $_POST['prabhari_adhikari_name'];
	$prabhari_adhikari_mobile = $_POST['prabhari_adhikari_mobile'];
	$prabhari_adhikari_post = $_POST['prabhari_adhikari_post'];
   
   $dd1 = $_POST['dd1'].'-'.$_POST['mm1'].'-'.$_POST['yyyy1'];
   
   $dd2 = $_POST['dd2'].'-'.$_POST['mm2'].'-'.$_POST['yyyy2'];
   
   
   $dd3 = $_POST['dd3'].'-'.$_POST['mm3'].'-'.$_POST['yyyy3'];
   
   
   $dd4 = $_POST['dd4'].'-'.$_POST['mm4'].'-'.$_POST['yyyy4'];
   
	$case_type = $_POST['case_type'];
   $remark = $_POST['remark'];
   
	$query = "INSERT INTO cases(yachikakarta_name, case_number, virudh, niyukt_adhivakta_name, niyukt_adhivakta_mobile, prabhari_adhikari_name, prabhari_adhikari_mobile, prabhari_adhikari_post, javadava_present_date, prakran_date, nirnaya_copy_adhivakta_sent_date, nirnaya_date,case_type, remark) VALUES (
	'$yachikakarta_name', '$case_number', 
	'$virudh',
	'$niyukt_adhivakta_name',
	 $niyukt_adhivakta_mobile,
	 '$prabhari_adhikari_name',
	 $prabhari_adhikari_mobile,
	 '$prabhari_adhikari_post',
	 '$dd1',
	 '$dd2',
	 '$dd3',
	 '$dd4',
	'$case_type',
   '$remark'
   )";
   //$count++;*
	$result = mysqli_query($conn, $query);
	//echo $result;
		//echo "<h3>Data successfully Inserted</h3>";
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
   
  
    <span Style="font-size:35px; margin-top:120px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></span>
   <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Legal File System</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:50px;">
<?php
$sql = "SELECT * FROM cases where case_number ='$case_number'";
$result_check = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result_check);
?>
  <span>
   	   <table>
   	   	<tr>
   	   	<th style="text-align: left;">
   	   		Attributes
   	   	</th>
   	   	<th>
   	   		Values
   	   	</th>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			याचिकर्ता का नाम:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['yachikakarta_name'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			याचिकर्ता का नंबर:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['case_number'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			विरुद्ध:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['virudh'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			प्रकरण में नियुक्त अभिकर्ता का नाम:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['niyukt_adhivakta_name'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			प्रकरण में नियुक्त अभिकर्ता का मो. नंबर:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['niyukt_adhivakta_mobile'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			प्रभारी अधिकारी का नाम:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['prabhari_adhikari_name'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			प्रभारी अधिकारी का पद:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['prabhari_adhikari_post'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			प्रभारी अधिकारी का मो. नंबर:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['prabhari_adhikari_mobile'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			Case Type
   	   		</td>
   	   		<td>
   	   			<?php echo $row['case_type'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			जवाबदावा प्रस्तुत दिनांक:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['javadava_present_date'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			प्रकरण की िस्थति दिनांक सहित:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['prakran_date'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			निर्णय की कॉपी अभिवक्ता द्वारा वि. वि. को भेजने का दिनांक:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['nirnaya_copy_adhivakta_sent_date'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			निर्णय दिनांक:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['nirnaya_date'] ?>
   	   		</td>
   	   	</tr>
   	   	<tr>
   	   		<td>
   	   			अन्य:
   	   		</td>
   	   		<td>
   	   			<?php echo $row['remark'] ?>
   	   		</td>
   	   	</tr>
   	   </table> 
         <form action="form.php">
         <input type="submit" name="submit" value="edit">
      </form>
  </span>
</div>
</center>
<a href="next.php"><b>Go to Home Page</b></a>
</body>
</html>