<?php
session_start();
include 'serverconfig.php';
?>
<?php include 'header.php' ?>  
<div >
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" >
<tr>
<form method="post" action="attemptlogin.php">
<td>
<table width="100%" border="4" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF">
<tr>
<td colspan="3" align="center">
<div style="color:blue;"><b>Login </b></div>
</td>
</tr>
<tr>
<td width="78">
<div style="font-size:17px;"><center><strong>Username</strong> </center></div>
</td>
<!--<td width="6">:</td>-->
<td width="294"><input  name="username" type="text" id="username"></td>
</tr>
<tr>
<td width="78">
<div style="font-size:17px;"><strong>Password</strong></div>
</td>
<!--<td width="6">:</td>-->
<td width="294"><input  name="password" type="password" id="password"></td>
</tr>
<tr>
<td colspan="3">
<center>
<input type="submit"  name="submit" value="Login"> 
&nbsp;&nbsp;&nbsp;
<input type="Reset" name="Reset" value="Reset">
</center>
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</div>
<?php include 'footer.php' ?>