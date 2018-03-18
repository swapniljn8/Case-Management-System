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
   	    
        <tr>
   	    <?php
        $case_number = $_POST["select"];
   	    $sql = "SELECT * FROM cases WHERE case_number = '$select'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				?>
				<td>
					<?php echo $row['yachikakarta_name']; ?>
				</td>
				<td>
					<?php echo $row['case_number'] ?>
				</td>

				<td>
					<?php echo $row['versus']; ?>
				</td>

				<td>
					<?php echo $row['niyukt_adhivakta_name']; ?>
				</td>
				<td>
					<?php echo $row['niyukt_adhivakta_mobile']; ?>
				</td>
				<td>
					<?php echo $row['prabhari_adhikari_name']; ?>
				</td>
				<td>
					<?php echo $row['prabhari_adhikari_mobile']; ?>
				</td>

				<td>
					<?php echo $row['prabhari_adhikari_post'];?>
				</td>
				<td>
					<?php echo $row['javadava_present_date'];?>
				</td>
				
				<td>
					<?php echo $row['prakran_date'];?>
				</td>
				
				<td>
					<?php echo $row['nirnaya_copy_adhivakta_sent_date'];?>
				</td>

				<td>
					<?php echo $row['nirnaya_date'];?>
				</td>

				<td>
					<?php echo $row['remark'];?>
				</td>

				<td>
					<?php echo $row['case_type'];?>
				</td>

				<td>
          <?php 
          if($row['approval_flag'] == 0) {
            echo "Not Approved"
          }
					else {
            echo "Approved";
          }
          ?>
				</td>
			</tr>
    </table>
  </div>
</div>
</center>
</body>
</html>