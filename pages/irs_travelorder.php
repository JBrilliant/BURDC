<?php
	include 'connection.php';
	if(isset($_POST['submit'])){
		$date = date("y/m/d");
		$numdate = date("m/d");
		
		echo $dateofTO = mysqli_real_escape_string($dbconn, $_POST['dateofTO']);
		echo $number = mysqli_real_escape_string($dbconn, $_POST['controlnumber']);
		echo $purpose = mysqli_real_escape_string($dbconn, $_POST['purpose']);
		echo $source = mysqli_real_escape_string($dbconn, $_POST['source']);
		echo $dateoftravel = mysqli_real_escape_string($dbconn, $_POST['traveldate']);
		echo $place = mysqli_real_escape_string($dbconn, $_POST['place']);
		echo $person = mysqli_real_escape_string($dbconn, $_POST['person']);

		$sql="insert into travelorder (date, dateofTO, controlnumber, purpose, source, traveldate, place, person) 
			  values ('$date', '$dateofTO', '$number', '$purpose', '$source', '$dateoftravel', '$place', '$person')";
		mysqli_query($dbconn, $sql) or die ("Can't Insert into incoming Title");
	}

?>
<html>
<head>
	<title>TRAVEL ORDER</title>
</head>
<body>
	<h1 align="center">TRAVEL ORDER</h1>
	<form method="post">
		<table align="center" cellspacing="5">
			<tr>
				<th>Date of Travel Order</th>
				<td><input type = "date" name = "dateofTO" value = ""></td>
 			</tr>
			<tr>
				<th>Number</th>
				<td><input type="text" name="controlnumber" value="" placeholder="2015-001"/></td>
			</tr>
				<th>Purpose</th>
				<td><input type="text" name="purpose" value=""/></td>
			</tr>
			<tr>
				<th>Source of Fund</th>
				<td><input type="text" name="source" value=""/></td>
			</tr>
			<tr>
				<th>Date of Travel</th>
				<td><input type = "date" name="traveldate" value =""></td>
			</tr>
			<tr>
				<th>Place of Travel</th>
				<td><input type = "text" name="place" value =""></td>
			</tr>
			<tr>
				<th>Person/s Included</th>
				<td><input type = "text" name="person" value = ""></td>
			<tr>
				<td>&nbsp&nbsp</td>
				<td><input type="submit" name="submit" value="OK"/></td>
			</tr>
		</table>
	</form>
</body>
</html>