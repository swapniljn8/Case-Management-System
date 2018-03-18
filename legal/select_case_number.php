<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?><!DOCTYPE html>
<html>
<head>
<title>File Tracking System</title>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:650px;">
   
  
    <div Style="font-size:35px; margin-top:120px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
   <div Style="font-size:25px; margin-top:10px; color:red; margin-bottom:10px;"><b>File Tracking System</b></div>
   <img src="logo.png" alt="logo" style="width:150px; height:150px; margin-bottom:20px;">

 <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b>Select Case Number</b> <br>
<input type="button" onclick="window.location='cases_page.php'" value="Back">
	</div>
   
   
   <form action="edit_case.php" method="POST">
   
  <table>
			<tr >	
				<td>
					<select name = "case_type"  required>
  				
  					<option value="">Case Type</option>
                    <option value="AA">AA</option>
                    <option value="AC">AC</option>
                    <option value="AR">AR</option>
                    <option value="ARBA">ARBA</option>
                    <option value="ARBC">ARBC</option>
                    <option value="CEA">CEA</option>
                    <option value="CER">CER</option>
                    <option value="CESR">CESR</option>
                    <option value="COMA">COMA</option>
                    <option value="COMP">COMP</option>
                    <option value="COMPA">COMPA</option>
                    <option value="CONA">CONA</option>
                    <option value="CONC">CONC</option>
                    <option value="CONCR">CONCR</option>
                    <option value="CONT">CONT</option>
                    <option value="CONTR">CONTR</option>
                    <option value="CR">CR</option>
                    <option value="CRA">CRA</option>
                    <option value="CRR">CRR</option>
                    <option value="CRRE">CRRE</option>
                    <option value="CRRF">CRRF</option>
                    <option value="CRRFC">CRRFC</option>
                    <option value="CS">CS</option>
                    <option value="EP">EP</option>
                    <option value="FA">FA</option>
                    <option value="FEMA">FEMA</option>
                    <option value="ITA">ITA</option>
                    <option value="ITR">ITR</option>
                    <option value="LPA">LPA</option>
                    <option value="MA">MA</option>
                    <option value="MACE">MACE</option>
                    <option value="MACOM">MACOM</option>
                    <option value="MACTR">MACTR</option>
                    <option value="MAIT">MAIT</option>
                    <option value="MAVAT">MAVAT</option>
                    <option value="MCC">MCC</option>
                    <option value="MCOMA">MCOMA</option>
                    <option value="MCP">MCP</option>
                    <option value="MCRC">MCRC</option>
                    <option value="MCRP">MCRP</option>
                    <option value="MP">MP</option>
                    <option value="MWP">MWP</option>
                    <option value="OTA">OTA</option>
                    <option value="RP">RP</option>
                    <option value="SA">SA</option>
                    <option value="STR">STR</option>
                    <option value="TR">TR</option>
                    <option value="VATA">VATA</option>
                    <option value="WA">WA</option>
                    <option value="WP">WP</option>
                    <option value="WPS">WPS</option>
                    <option value="WTA">WTA</option>
                    <option value="WTR">WTR</option>
  				
  			</select>&nbsp;&nbsp;
				</td>
				
					
				<td>
					<input type="number" name="case_no" required>&nbsp;&nbsp;
				</td>
				
				
				<td>
					<select name = "case_year"  required>
							<option value="">year</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2030">2030</option>
							<option value="2031">2031</option>
							<option value="2032">2032</option>
							<option value="2033">2033</option>
							<option value="2034">2034</option>
							<option value="2035">2035</option>
							<option value="2036">2036</option>
							<option value="2037">2037</option>
							</select>
				</td> </tr>
				<tr > 
				<td colspan="3"><center><input type="submit" name="submit2"  value="Search" ></center> </td>
			</tr>
		</table>
  </center> </div>
 
 </form>
</div>
</center>
</body>
</html>