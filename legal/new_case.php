<?php 	session_start();
		if(!isset($_SESSION['username'])){
		header("Location: index.php");
		}
?>
<?php include 'header.php'; ?>
<span style="color:blue; margin-bottom:10px; font-size:25px;"> <b>विस्तार दर्ज करे</b> <br>
	</span>
<form action="new_case_handler.php" method="POST"> 	
	<table>
		<tr>
			<td><span style="float: left">याचिका क्रमांक/ प्रकरण क्रमांक/ रिव्यु/ अपील :</span>
			</td>
			
			<td>
				<table>
					<tr>
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
							<input type="number" min="0" name="case_no" required>&nbsp;&nbsp;
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
  				&nbsp;&nbsp;
							
						</td>
					</tr>
				</table>
			</td>
		</tr>	
			
		<tr>
			<td><div style="float: left">याचिकाकर्ता का नाम:</div>
			</td>
			
			<td><script language="javascript" required>
            		CreateHindiTextBox("yachikakarta_name");
        		</script>
			</td>
		
		
		</tr>
			
		<tr>
			<td>
				<div style="float: left">विरुद्ध:</div>
			</td>
			
			<td>
				<script language="javascript">
            		CreateHindiTextBox("versus");
				</script>
			</td>
		</tr>
		
		<tr>
			<td>
				<div style="float: left">प्रकरण में नियुक्त अधिवक्ता का नाम:</div>
			</td>
			
			<td><select  name="adhivakta_name"  required>
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
		</tr>
			
		<tr>
			<td>
					<div style="float: left">प्रभारी अधिकारी का नाम:</div>	
			</td>
			
			<td>
				<script language="javascript">
            		CreateHindiTextBox("adhikari_name");
        		</script>
			</td>
		</tr>	
			
		<tr>
			<td>
					<div style="float: left">प्रकरण की स्थिति:</div>
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
							<select  name="mm2" id="mm2" required>
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
							<a href = "http://mphc.gov.in/case-status-new" target="_blank"><strong> High Court </strong> </a>
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
				
			<td>
				<table>
					<tr>
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
					&nbsp;&nbsp;
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
					</select>&nbsp;&nbsp;
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
						</select>&nbsp;&nbsp;
						</td>
					</tr>
					
				</table>
				
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
				<input type="submit" name="जमा करें" required>				
			</td>
			</td>
		</tr>
	</table>
	</form>
	</div>
	</center>
	
	<a href="http://hindi.changathi.com/" target="_blank">for more hindi support</a>

	</body>
	</html>