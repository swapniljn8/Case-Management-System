<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?>
<!DOCTYPE html>
<html>
<head>
<title>Legal file System</title>
<style type="text/css">
	/* generic css */

body {
	font-family:sans-serif;
	font-size:3vmin; /* unit relative to smallest viewport size */
}
h1 {
    text-align:center;
}
pre {
    font-size:0.7em;
    background:gainsboro;
    padding:0.5ex 0.5em;
    margin:0 1em 0 2em;
    overflow-x:scroll; /* default 'visible' */
}
/* styling tabs css ( designed for visualize/identify elements ^^ )*/
/* Style the tab */

.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #ffff99;
    /*background-color: #f1f1f1;*/
}

/* Style the buttons inside the tab */

.tab button {
    /*background-color: inherit;*/
    float: center;
    border-style: outset;
    /*border: 100px;*/
    /*outline: 100px;*/
    cursor: pointer;
    padding: 5px 5px;
    /*transition: 0;*/
    font-size: 15px;
}

/* Change background color of buttons on hover */

.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */

.tab button.active {
    background-color: grey;
    color: white;
    border-style: outset;
    /*background-color: #ccc;*/
}

/* Style the tab content */

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}


</style>
</head>
<body style="background-color:#ffff99;">
<center>
<div style="border:5px solid black; width:800px; height:550px;">
    <div Style="font-size:35px; margin-top:20px; color:red;"><b><br><br>Case Management System</b></div>
   	<center>
   	<img src="law.png" alt="logo" style="width:150px; height:150px; margin-bottom:20px;">
   	</center>
	  <input type="button" onclick="window.location='cases_page.php'" value="Back">
   <br> <br>
<span class="tab">
  <button class="tablinks" onclick="openType(event, 'View By Year')">Year</button>
 
  
  <button class="tablinks" onclick="openType(event, 'View By Case Number')">Case Number</button>
  
  <button class="tablinks" onclick="openType(event, 'View By Advocate Name')">Advocate Name</button>
  
  <button class="tablinks" onclick="window.location.href='view_by_compliance_date.php'">Compliance Date</button>
 
  <button class="tablinks" onclick="window.location.href='view_by_upcoming_hearing.php'">Upcoming  Hearings</button>
   <button class="tablinks" onclick="window.location.href='overall_summary.php'">Overall Summary</button>
   <button class="tablinks" onclick="window.location.href='video_conferencing_summary.php'">Video Conferencing Summary</button>
  
</span>
 
<div id = "View By Year" class = "tabcontent">
	<?php $_SESSION['var'] = "year"; ?>
<table border="2" cellspacing="10" cellpadding="10" >
<tr>
<form action="view_by_year.php" method="POST">
<td><b>Select Year :</b></td>
<td>
					<select  name="yyyy" required>
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
				
</td>

	<td><input type="submit" name="submit1"  value="Search" > </td> <!-- onclick="return validate();" -->
</form>
</tr>
</table>
</div>


<div id = "View By Case Number" class="tabcontent">
    		<!--
			<?php //$_SESSION['var'] = "case_number"; ?>
			-->
<table border="2" cellspacing="10" cellpadding="10" >
<tr>
<form action="view_case.php" method="post">
<td><b>Select Case Number:</b></td>
<td>
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
				</td>
			</tr>
		</table>
	</td>
	<td><input type="submit" name="submit2"  value="Search" > </td>
</form>
</tr>
</table>
		
		
		
	</form>
</div>


<div id = "View By Advocate Name" class="tabcontent">
	<?php $_SESSION['var'] = "advocate_name"; ?>
  
                        
					
<table border="5" cellspacing="10" cellpadding="10" >
<tr>
<form action="view_by_advocate_name.php" method="post">
<td><b>Select Advocate Name:</b></td>
<td>

			
				
					<select  name="advocate_name"  required>
						<option value="">--------</option>
						<option value="श्री मनोज द्विवेदी">श्री मनोज द्विवेदी</option>
						<option value="श्री प्रदीप गुप्ता">श्री प्रदीप गुप्ता</option>
						<option value="श्री विवेक शरण">श्री विवेक शरण</option>
						<option value="श्री लोकेश मेहता">श्री लोकेश मेहता</option>
						<option value="श्री विनय सराफ">श्री विनय सराफ</option>
						<option value="श्री चेतन निगम">श्री चेतन निगम</option>
						<option value="श्री अजय मिश्रा">श्री अजय मिश्रा</option>
						<option value="श्री कुशल गोमल">श्री कुशल गोमल</option>
						<option value="श्री कमल मंडलोई">श्री कमल मंडलोई</option>
						<option value="श्री विवेक पटवा">श्री विवेक पटवा</option>
						<option value="श्री कमल यादव">श्री कमल यादव</option>
						<option value="श्री स्वप्निल जोशी">श्री स्वप्निल जोशी</option>
						<option value="श्री सुदर्शन जोशी ">श्री सुदर्शन जोशी </option>
						<option value="श्री रोहन व्यास">श्री रोहन व्यास</option>
						<option value="श्री राम सिंह भदौरिया">श्री राम सिंह भदौरिया</option>
						<option value="श्री निशीत विशर्ड">श्री निशीत विशर्ड</option>
						<option value="सुश्री नेहा यादव">सुश्री नेहा यादव</option>
						
						</select>
				</td>
			
		
	
	<td><input type="submit" name="submit3"  value="Search" > </td>
</form>
</tr>
</table>	
  	</form>
</div>

<script>
function openType(evt, type) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(type).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</div>
</center>
</body>
</html>