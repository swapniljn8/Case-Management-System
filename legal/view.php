<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Legal file System</title>
<style type="text/css">
	/* generic css */

body {
	font-family:sans-serif;
	font-size:4vmin; /* unit relative to smallest viewport size */
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
<div style="border:5px solid black; width:800px; height:650px;">
    <span Style="font-size:35px; margin-top:120px;"><b>Case Management System</b></span>
   	<center>
   	<img src="law.png" alt="logo" style="width:150px; height:150px; margin-bottom:50px;">
   	</center>
<span class="tab">
  <button class="tablinks" onclick="openType(event, 'View By Date')">View By Date</button>
  <button class="tablinks" onclick="openType(event, 'View By Case Type')">View By Case Type</button>
  <button class="tablinks" onclick="openType(event, 'View By Case Number')">View By Case Number</button>
  <button class="tablinks" onclick="openType(event, 'Case Approved')">Case Approved</button>
  <button class="tablinks" onclick="openType(event, 'Case Not Approved')">Case Not Approved</button>
  <button class="tablinks" onclick="openType(event, 'Upcoming Cases')">Upcoming Cases</button>
</span>
 
<div id = "View By Date" class = "tabcontent">
	<?php $_SESSION['var'] = "by_date"; ?>
<table border="5" cellspacing="10" cellpadding="10" >
<tr>
<form action="show.php" method="post">
<td><b>From Date:</b></td>
<td>
<table>
			<tr >	
				<td>
					<select  name="dd1" id="dd1" required>
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
				</td>
				
					
				<td>
					<select  name="mm1" id="mm1" required>
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
					</select>
				</td>
				
				
				<td>
					<select  name="yyyy1" id="yyyy1" required>
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
<td><b>To Date:</b></td>
<td>
<table>
			<tr >	
				<td>
					<select  name="dd4" id="dd4" required>
						<option value="">dd</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
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
				</td>
				
					
				<td>
					<select  name="mm4" id="mm4" required>
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
						</select>
				</td>
				
				
				<td>
					<select  name="yyyy4" id="yyyy4" required>
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
	<td><input type="submit" name="date"  value="Search" > </td> <!-- onclick="return validate();" -->
</form>
</tr>
</table>
</div>

<div id = "View By Case Type" class="tabcontent">
	<?php $_SESSION['var'] = "type"; ?>
  <form action = "show.php" method = "post">
                    Case Type:-
                    <select name="case_type">
                        <option value="WA">WA</option>
                        <option value="WP">WP</option>
                        <option value="WPS">WPS</option>
                        <option value="WTA">WTA</option>
                    </select>
                    <input type = "submit" value = "submit" name = "submit">
     </form>
</div>

<div id="View By Case Number" class="tabcontent">
	<?php $_SESSION['var'] = "number" ; ?>
  <form action = "show.php" method = "post">
                    Case Number:-<input type = "text" name = "number">
                    <input type  = "submit" name = "submit" value = "submit">
                    </form>
</div>

<div id = "Case Approved" class="tabcontent">
	<?php $_SESSION['var'] = "approved"; ?>
  <form action = "show.php" method = "post">
                        <input type = "submit" name = "approved" value = "Show Approved Cases">
  	</form>
</div>

<div id = "Case Not Approved" class="tabcontent">
	<?php $_SESSION['var'] = "not_approved"; ?>
	<form action = "show.php" method = "post">
    	<input type = "submit" name = "not_approved" value = "Show Not Approved Cases">
	</form>
</div>

<div id="Upcoming Cases" class="tabcontent">
	<?php $_SESSION['var'] = "upcoming"; ?>
<table border="5" cellspacing="10" cellpadding="10" >
<tr>
<form action="show.php" method="post">
<td><b>Upto Date:</b></td>
<td>
<table>
			<tr >	
				<td>
					<select  name="dd1" id="dd1" required>
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
				</td>
				
					
				<td>
					<select  name="mm1" id="mm1" required>
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
					</select>
				</td>
				
				
				<td>
					<select  name="yyyy1" id="yyyy1" required>
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
	<td><input type="submit" name="submit" onclick="return validate();" value="Search" > </td>
</form>
</tr>
</table>
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