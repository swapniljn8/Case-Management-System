<?php 
session_start();
include 'serverconfig.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Legal File System</title>
<script type="text/javascript">
function setUpdateAction() {
   document.frmUser.action = "edit_user.php";
   document.frmUser.submit();
}
function setViewAction() {
   document.frmUser.action = "view_user.php"
   document.frmUser.submit();
}
</script>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:650px;">
   
  
    <span Style="font-size:35px; margin-top:120px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></span>
   <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>Legal File System</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:50px;"/>
   
<div>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   		
         if(isset($_POST['date'])) {
            $dd1 = $_POST['dd1'].'-'.$_POST['mm1'].'-'.$_POST['yyyy1'];

            $dd4 = $_POST['dd4'].'-'.$_POST['mm4'].'-'.$_POST['yyyy4'];
            
   			$sql = "SELECT case_type, case_number, prakran_date, nirnaya_date FROM cases where prakran_Date = '$dd1'AND nirnaya_Date = '$dd4';";
   			$result = mysqli_query($conn, $sql);
   			if(mysqli_num_rows($result) > 0) {
   				?>
               <table>
               <tr>
                  <th>
                     Serial No.          
                  </th>
                  <th>
                     Case Number
                  </th>
                  <th>
                     Case Type
                  </th>
                  <th>
                     From Date
                  </th>
                  <th>
                     To Date
                  </th>
               </tr>
               <?php 
               $i = 0;
               while($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                  <form name = "frmUser" value = <?php echo $row['case_number'] ?> method="post">
                        <?php
                  echo "<tr>";
                  ?>
                  <td><input type="radio" name="select" value="<?php echo $row["case_number"]; ?>" ></td>
                  <?php
                  echo "<td>". $i++."</td>";
                  echo "<td>" . $row['case_type'] . "</td>";
                  echo "<td>" . $row['case_number'] . "</td>";
                  echo "<td>" . $row['prakran_date'] . "</td>";
                  echo "<td>" . $row['nirnaya_date'] . "</td>";
                  echo "</tr>";
               }
                  ?>
                  <tr>
                  <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" ></td> 
                  <td colspan="4"><input type="button" name="view" value="View" onClick="setViewAction();" > </td>
               </tr>
               </form>
            </table>
            
            <?php
               }
         }
         elseif(isset($_POST['case_type'])) {
               $variable = $_POST['case_type'];
               $sql = "SELECT case_type, case_number, prakran_date, nirnaya_date FROM cases WHERE case_type= '$variable'";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0) {
               ?>
               <table>
               <tr>
                  <th>
                     Serial No.          
                  </th>
                  <th>
                     Case Number
                  </th>
                  <th>
                     Case Type
                  </th>
                  <th>
                     From Date
                  </th>
                  <th>
                     To Date
                  </th>
               </tr>
               <?php 
               $i = 0;
               while($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                  <form name = 'frmUser' value = $row['case_number'] method='post'>
                  <?php
                  echo "<tr>";
                  ?>
                  <td><input type="radio" name= "select" value="<?php echo $row['case_number']; ?>" ></td>
                  <?php
                  echo "<td>". $i++."</td>";
                  echo "<td>" . $row['case_type'] . "</td>";
                  echo "<td>" . $row['case_number'] . "</td>";
                  echo "<td>" . $row['prakran_date'] . "</td>";
                  echo "<td>" . $row['nirnaya_date'] . "</td>";
                  echo "</tr>";
               }
                  ?>
                  <tr>
                  <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();"> </td>
                  <td colspan="4"><input type="button" name="view" value="View" onClick="setViewAction();">  </td> 
                  </tr>
               </table>
               </form>
               <?php
            } 
         }     
         elseif(isset($_POST['number'])) {
            $variable = $_POST['number'];
            $sql = "SELECT case_type, case_number, prakran_date, nirnaya_date FROM cases where case_number = '$variable'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
               ?>
               <table>
               <tr>
                  <th>
                     Serial No.          
                  </th>
                  <th>
                     Case Number
                  </th>
                  <th>
                     Case Type
                  </th>
                  <th>
                     From Date
                  </th>
                  <th>
                     To Date
                  </th>
               </tr>
               <?php 
               $i = 1;
               while($row = mysqli_fetch_assoc($result))
                  {
                  ?>
                  <form name = "frmUser" value = "$row['case_number']" method="post">
                  <tr>
                  <td><input type="radio" name="select" value="<?php echo $row['case_number']; ?>" ></td> &nbsp
                  <td><?php echo $i++ ?></td> &nbsp
                  <td><?php echo $row['case_type'] ?></td> &nbsp
                  <td><?php echo $row['case_number']?> </td> &nbsp
                  <td><?php echo $row['prakran_date']?></td> &nbsp
                  <td><?php echo $row['nirnaya_date'] ?></td> &nbsp
                  </tr>
                  <?php
               }
                  ?>
                  <tr>
                  <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();"></td> 
                  <td colspan="4"><input type="button" name="view" value="View" onClick="setViewAction();"> </td>
                  </tr>
               </form>
            </table>
            <?php
            }
         }
         elseif(isset($_POST['approved'])) {
            
            $sql = "SELECT case_type, case_number, prakran_date, nirnaya_date FROM cases where approval_flag = 1";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
               ?>
               <table>
               <tr>
                  <th>
                     Serial No.          
                  </th>
                  <th>
                     Case Number
                  </th>
                  <th>
                     Case Type
                  </th>
                  <th>
                     From Date
                  </th>
                  <th>
                     To Date
                  </th>
               </tr>
               <?php 
               $i = 0;
               while($row = mysqli_fetch_assoc($result))
                  {
                     ?>
                     <form name = "frmUser" value = <?php echo $row['case_number'] ?> method="post">
                  echo "<tr>";
                  ?>
                  <td><input type="radio" name="select" value="<?php echo $row["case_number"]; ?>" ></td>
                  <?php
                  echo "<td>". $i++."</td>";
                  echo "<td>" . $row['case_type'] . "</td>";
                  echo "<td>" . $row['case_number'] . "</td>";
                  echo "<td>" . $row['prakran_date'] . "</td>";
                  echo "<td>" . $row['nirnaya_date'] . "</td>";
                  echo "</tr>";
               }
                  ?>
                  <tr>
                  <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();"> </td>
                  <td colspan="4"><input type="button" name="view" value="View" onClick="setViewAction();"></td>
               </tr>
               </form>
               </table>
            <?php
            }
         }      
         elseif(isset($_POST['not_approved'])) {
            $sql = "SELECT case_type, case_number, prakran_date, nirnaya_date FROM cases where approval_flag = 0;";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
               ?>
               <table>
               <tr>
                  <th>
                     Serial No.          
                  </th>
                  <th>
                     Case Number
                  </th>
                  <th>
                     Case Type
                  </th>
                  <th>
                     From Date
                  </th>
                  <th>
                     To Date
                  </th>
               </tr>
               <?php 
               $i = 0;
               while($row = mysqli_fetch_assoc($result))
                  {
                     ?>
                     <form name="frmUser" value = <?php echo $row['case_number'] ?> method = "post">
                        <?php
                  echo "<tr>";
                  ?>
                  <td><input type="radio" name="select" value="<?php echo $row["case_number"]; ?>" ></td>
                  <?php
                  echo "<td>". $i++."</td>";
                  echo "<td>" . $row['case_type'] . "</td>";
                  echo "<td>" . $row['case_number'] . "</td>";
                  echo "<td>" . $row['prakran_date'] . "</td>";
                  echo "<td>" . $row['nirnaya_date'] . "</td>";
                  echo "</tr>";
               }
                  ?>
                  <tr>
                  <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();"></td> 
                  <td colspan="4"><input type="button" name="view" value="View" onClick="setViewAction();"></td> 
               </tr>
            </form>
               </table>
            <?php
            }
         }
         /*      
         elseif($_SESSION['var'] == "upcoming") {
            $dd1 = $_POST['dd1'].'-'.$_POST['mm1'].'-'.$_POST['yyyy1'];
            $sql = "SELECT case_type, case_number, prakran_date, nirnaya_date FROM cases WHERE nirnaya_date = '$dd1'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
               ?>
               <table>
               <tr>
                  <th>
                     Serial No.          
                  </th>
                  <th>
                     Case Number
                  </th>
                  <th>
                     Case Type
                  </th>
                  <th>
                     From Date
                  </th>
                  <th>
                     To Date
                  </th>
               </tr>
               <?php 
               $i = 0;
               while($row = mysqli_fetch_assoc($result))
                  ?>

                  <form name = "frmUser" value = <?php echo $row['case_number'] ?> method="post">"
                  <?php
                  {
                     ?>
                  <tr>
                  <td><input type="radio" name="select" value="<?php echo $row["case_number"]; ?>" ></td>
                  <?php
                  echo "<td>". $i++."</td>";
                  echo "<td>" . $row['case_type'] . "</td>";
                  echo "<td>" . $row['case_number'] . "</td>";
                  echo "<td>" . $row['prakran_date'] . "</td>";
                  echo "<td>" . $row['nirnaya_date'] . "</td>";
                  echo "</tr>";
               }
                  ?>
                  <tr>
                  <td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();"></td> 
                  <td colspan="4"><input type="button" name="view" value="View" onClick="setViewAction();"></td>
                  </tr>
                  </form> 
               </table>
            
            <?php
            }
         }
         */
   }      
?>
</div>
</div>
</center>
</body>
</html>