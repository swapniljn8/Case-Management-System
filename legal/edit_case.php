<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
		$case_num = $_POST['case_type']."/".$_POST['case_no']."/".$_POST['case_year'];
		
	include('serverconfig.php');
	$query="select * from cases where case_number='{$case_num}'";
	$result=mysqli_query($conn,$query);
	$num=mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
if(!$num>0){
	echo "<script>alert('Case Not Found!!');window.location='select_case_number.php';</script>";
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
<script>
function alterstatus(){
	
	var tr1= document.getElementById('tr1');
	var tr2=document.getElementById('tr2');
	if(document.getElementById('status').value=='disposed'){
		tr1.style.display='table-row';
	tr2.style.display='table-row';
	}else{
		tr1.style.display='none';
	tr2.style.display='none';
	}
	

}

function alterfavor(){
	var tr3= document.getElementById('tr3');
	var tr4=document.getElementById('tr4');
	var tr5= document.getElementById('tr5');
	var tr6=document.getElementById('tr6');
	if(document.getElementById('favour').value=='against'){
	tr3.style.display='table-row';
	tr4.style.display='table-row';
	tr5.style.display='table-row';
	tr6.style.display='table-row';
	}else{
	tr3.style.display='none';
	tr4.style.display='none';
	tr5.style.display='none';
	tr6.style.display='none';
	}
}
</script>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:950px; height:950px;">
   
  
   <div Style="font-size:45px; margin-top:50px;"><b>Devi Ahilya Vishwavidyalaya, Indore</b></div>
   <div Style="font-size:35px; margin-top:10px; color:red; margin-bottom:10px;"><b>File Tracking System</b></div>
   <img src="logo.png" alt="logo" style="width:130px; height:130px; margin-bottom:15px;">
    <div style="color:blue; margin-bottom:10px; font-size:25px;"> <b>विस्तार दर्ज करे</b> <br>
	</div>
	
<form action="edit_case_handler.php" method="POST"> 	
	<table>
		<tr>
			<td><div style="float: left">याचिका क्रमांक/ प्रकरण क्रमांक/ रिव्यु/ अपील :</div>
			</td>
			
			<td>
				<table>
					<tr>
						<td>
							<input type="text" name="case" value="<?php  echo $case_num; ?>" readonly required>&nbsp;&nbsp;
						</td>
						
					</tr>
				</table>
			</td>
		</tr>	
			
		<tr>
			<td><div style="float: left">याचिकाकर्ता का नाम:</div>
			</td>
			
			<td ><input size="40" type="text" readonly name="yachikakarta_name" value="<?php echo $row['yachikakarta_name']; ?>">
			</td>
		
		
		</tr>
			
		<tr>
			<td>
				<div style="float: left">विरुद्ध:</div>
			</td>
			
			<td>
				
				<input type="text" name="versus" value="<?php echo $row['versus']; ?>" size="40" readonly>
				</td>
		</tr>
		
		<tr>
			<td>
				<div style="float: left">प्रकरण में नियुक्त अधिवक्ता का नाम:</div>
			</td>
			
			<td>
				<input type="text" name="adhivakta_name" size="40" value="<?php echo $row['adhivakta_name']; ?> "  readonly>
			</td>
		</tr>
			
		<tr>
			<td>
					<div style="float: left">प्रभारी अधिकारी का नाम:</div>	
			</td>
			
			<td>
				
				<input type="text" name="adhikari_name" size="40" value="<?php echo $row['adhikari_name'];?>" readonly >
			</td>
		</tr>	
			
		<tr>
			<td>
					<div style="float: left">प्रकरण की स्थिति:</div> 
			</td>
			<td>
				
				<textarea  rows="4" cols="40" name="history" readonly><?php echo $row['prakran_stithi']; ?></textarea>
			</td>
		</tr>	
		 <tr><td>अगली तारीख जोड़े
			</td>
			<td>
				<table>
					<tr>
						<td>
							<select  name="dd2" id="dd2" required>
							<option value="">dd</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							
						</select>&nbsp;&nbsp;
						</td>
						
						<td>
							<select  name="mm2" id="mm2"required >
							<option value="">month</option>
							<option value="01">January</option>
							<option value="02">Februrary</option>
							<option value="03">March</option>
							<option value="04">April</option>
							<option value="05">May</option>
							<option value="06">June</option>
							<option value="07">July</option>
							<option value="08">August</option>
							<option value="09">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
						</select>&nbsp;&nbsp;
						</td>
						
						<td>
							<select  name="yyyy2" id="yyyy2" required>
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
							</select>&nbsp;&nbsp;
						</td>
						
						<td>
							<a href="http://mphc.gov.in/cs" target="_blank">High Court Link</a>
						</td>
						
					</tr>
				</table>
			</td>
		</tr>		
	
		<tr>
			<td>
			</td>
			
			<td>
				<script language="javascript">
            		CreateHindiTextBox("description");
				</script>
			</td>
		</tr>
			
		<tr>
			<td>
				<div style="float: left">जवाबदावा प्रस्तुत दिनांक:</div>
			</td>
				
				
				
				
				
				
				
				<?php $javab_date = $row['javabdawa_date'];
					//	echo $javab_date."  ";
								$arr=explode('-',$javab_date);
						//				echo $arr[0]."///".$arr[1]."///".$arr[2];
			?>
			<td>
				<table>
					<tr>
						<td>
							<select  name="dd1" id="dd1" required>
						<option value="<?php echo "$arr[0]"; ?>"><?php echo "$arr[0]"; ?></option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					&nbsp;&nbsp;
						</td>
						
						<td>
							<select  name="mm1" id="mm1" required>
						<option value="<?php echo "$arr[1]"; ?>"><?php echo "$arr[1]"; ?></option>
						<option value="01">January</option>
						<option value="02">Februrary</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>&nbsp;&nbsp;
						</td>
						
						<td>
						<select  name="yyyy1" id="yyyy1" required>
						<option value="<?php echo "$arr[2]"; ?>"><?php echo "$arr[2]"; ?></option>
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
						</select>&nbsp;&nbsp;
						</td>
					</tr>
					
				</table>
				
			</td>
		</tr>	
		<tr>
			<td>
				केस स्टेटस
			</td>
			
			<td>
				<select name="status" onchange="alterstatus()" id="status" required>	
					<option value="pending">Pending</option>
					<option value="disposed">Disposed</option>
			</td>
		</tr>
		<tr id="tr1" style="display:none;">
			<td>	निर्णय दिनांक
			</td>
			
			<td>
				<table>
					<tr>
						<td>
							<select id="dd3"   name="dd3"  >
						<option value="">dd</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					&nbsp;&nbsp;
						</td>
						
						<td>
							<select id="mm3" name="mm3"  >
						<option value="">month</option>
						<option value="01">January</option>
						<option value="02">Februrary</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>&nbsp;&nbsp;
						</td>
						
						<td>
							<select id="yyyy3" name="yyyy3"  >
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
						</select>&nbsp;&nbsp;
						</td>
					</tr>
				</table>
			</td>
			
		</tr>
		<tr id="tr2" style="display:none;">
			<td>
				फेवर
			</td>
			<td>
				<select id="favour" onchange="alterfavor()" name="favour">
				<option value="">--</option>
				<option value="for">for</option>
				<option value="against">against</option>
			</td>
		</tr>
		
		<tr id="tr3" style="display:none;">
			<td>
				Compliance Period
			</td>
			
			<td>
				<input id="days" type="number" name="days">&nbsp; days &nbsp;
			</td>
		</tr>
		
		<tr id="tr4" style="display:none;">
			<td>
				Compliance(From Date)
			</td>
			
			<td>	
				<table>
					<tr>
						<td>
							<select id="dd4" name="dd4"  >
						<option value="">dd</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					&nbsp;&nbsp;
						</td>
						
						<td>
							<select  name="mm4" id="mm4" >
						<option value="">month</option>
						<option value="01">January</option>
						<option value="02">Februrary</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>&nbsp;&nbsp;
						</td>
						
						<td>
							<select  name="yyyy4" id="yyyy4" >
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
						</select>&nbsp;&nbsp;
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		
		<tr id="tr5" style="display:none;">
			<td>
				Compliance against Department
			</td>
			
			<td>
				<select id="department"  name="department">
				<option value=""> -----------</option>
				<option value="Asc"> Human Resource Development Centre (ASC)</option>
				<option value="Biochem">School of Biochemistry (BIOCHEM)</option>
				<option value="Sobiotech">School of BioTechnology (BIOTECH)</option>
				<option value="Chemsc">School of Chemical Sciences (CHEMICAL)</option>
				<option value="Socmrce">School of Commerce (COMMERCE)</option>
				<option value="socsit">School of Computer Science & Information Technology (SCSIT)</option>
				<option value="Sodsf">School of Data Science & Forecasting (DSF)</option>
				<option value="Soecon">School of Economics (ECON)</option>
				<option value="Soedu">School of Education (EDU)</option>
				<option value="Soex">School of Electronics (ELEX)</option>
				<option value="Sees">School of Energy & Environmental Studies (SEES)</option>
				<option value="Soinstru">School of Instrumentation (INST)</option>
				<option value="Sjmc">School of Journalism & Mass Communication (SJMC)</option></option>
				<option value="Solaw">School of Law (LAW)</option>
				<option value="Sols">School of Life Sciences (SLS)</option>
				<option value="Solang">School of Languages</option>
				<option value="Somath">School of Mathematics ( MATH)</option>
				<option value="Sopharma">School of Pharmacy (PHARMACY)</option>
				<option value="Sopedu">School of Physical Education (SPEDU)</option>
				<option value="Sophy">School of Physics ( PHYSICS)</option>
				<option value="Sostat">School of Statistics (STAT)</option>
				<option value="Soss">School of Social Science</option>
				<option value="Ietdavv">Institute of Engineering & Technology (IET)</option>
				<option value="Imsdavv">Institute of Management Studies (IMS)</option>
				<option value="Iipsdavv">International Institute of Professional Studies (IIPS)</option>
				<option value="Compcent">Computer Centre</option>
				<option value="itc">*Information Technology Centre (ITC)</option>
				<option value="bchair">*Baha'i  Chair for Studies in Development (BCHAIR)</option>
				<option value="Solib">School of Library and Information Science (SLIS)</option>
				<option value="Cscdavv">Centre for Science  Communication (CSC/SFSP)  / ( Flash Site)</option>
				<option value="Doll">Department of Life Long Learning (DACEE)</option>
				<option value="Emrcdavv">Educational Multimedia Research Centre (EMRC)</option>
				<option value="Umcdavv">University Minority Cell (UMC)</option>
				<option value="Ddedavv">Directorate of Distance Education (DDE)</option>
				<option value="Soyoga">School of Yoga (Yoga)</option>
				<option value="Ccdavv">Community College (CC)</option>
				<option value="Ddukkdavv">DDU-Kaushal Kendra</option>
				<option value="vcoffice"> VC Office</option>
				<option value="Regis">Registrar</option>
				<option value="Conf">Confidential</option>
				<option value="Develop">Development</option>
				<option value="Exam">Examination</option>
				<option value="Store">Store</option>
				<option value="Estab">Establishment</option>
				<option value="Acad">Academic</option>
				<option value="Acco">Accounts</option>
				<option value="Audit">Audit</option>
				<option value="SCST">SC/ ST</option>
				<option value="Engg">Engineering</option>
				<option value="DCDC">DCDC</option></option>
				<option value="DSW">DSW</option>
				<option value="NSS">NSS</option>
				<option value="Adminis">Administration</option>
				</select> 
				
			</td>
		</tr>
		
		<tr id="tr6" style="display:none;">
			<td>
				Appeal 
			</td>
			
			<td>
				<input id="yes" type="radio" name="appeal" value="yes">YES
				<input id="no" type="radio" name="appeal" value="no">NO
				
					
			</td>
		</tr>
		
		
		<tr>
			<td>
				<div style="float: left">अन्य जानकारी:</div>
			</td>
			
			<td>
				<script language="javascript">
            	CreateHindiTextBox("remarks");
        		</script>
			</td>
		</tr>
		
		
		<tr>
			<td>
				
			</td>
				
			<td>
				<input type="submit" name="submit" value="Confirm and Save" >				
			</td>
			</td>
		</tr>
	</table>
	
	
	</form>
	
	
	
	
	
	
	
	</div>
	</center>
	</body>
	</html>