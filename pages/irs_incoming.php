<?php
	include 'connection.php';
	if(isset($_POST['submit'])){
		$date = date("y/m/d");
		$numdate = date("m/d");
		echo $number= mysqli_real_escape_string($dbconn, $_POST['controlnumber']);
		//echo $number = $numdate.'-'.$number;

		echo $dateofletter= mysqli_real_escape_string($dbconn, $_POST['dateofletter']);
		echo $origin= mysqli_real_escape_string($dbconn, $_POST['origin']);
		echo $forwhom= mysqli_real_escape_string($dbconn, $_POST['forwhom']);
		echo $particulars= mysqli_real_escape_string($dbconn, $_POST['particulars']);
		echo $remarks= mysqli_real_escape_string($dbconn, $_POST['remarks']);
		echo $unitreceived= mysqli_real_escape_string($dbconn, $_POST['unit']);
		
		$sql="insert into incoming (date, number, dateofletter, origin, forwhom, particulars, remarks, unitreceived) 
			  values ('$date', '$number', '$dateofletter', '$origin', '$forwhom', '$particulars', '$remarks', '$unitreceived')";
		mysqli_query($dbconn, $sql) or die ("Can't Insert into incoming Title");
	}
?>
<html>
<head>
	<title>INCOMING</title>
</head>
<body>
	<h1 align="center">INCOMING</h1>
	<form method="post">
		<table align="center" cellspacing="5">
			<tr>
				<th>Number</th>
				<td><input type="text" name="controlnumber" value="" placeholder="2015-001"/></td>
			</tr>
			<tr>
				<th>Date of Letter</th>
				<td><input type="date" name="dateofletter" value=""/></td>
			</tr>
			<tr>
				<th>Origin</th>
				<td><input type="text" name="origin" value=""/></td>
			</tr>
			<tr>
				<th>For Whom?</th>
				<td><input type="text" name="forwhom" value=""/></td>
			</tr>
			<tr>
				<th>Particulars</th>
				<td><input type="text" name="particulars" value=""/></td>
			</tr>
			<tr>
				<th>Remarks</th>
				<td><input type="text" name="remarks" value=""/></td>
			</tr>
			<tr>
				<th>Unit Received</th>
				<td>
					<select name="unit">
						<option value="fortihrcom">FOR TIHRCOM</option>
						<option value="forpmdu">FOR PMDU</option>
						<option value="forbac">FOR BAC</option>
						<option value="forpec">FOR PEC</option>
						<option value="fortdpu">FOR TDPU</option>
						<option value="foripru">FOR IPRU</option>
						<option value="forsepru">FOR SEPRU</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp&nbsp</td>
				<td><input type="submit" name="submit" value="OK"/></td>
			</tr>
		</table>
	</form>
</body>
</html>