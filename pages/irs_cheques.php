<?php
	include 'connection.php';
	if(isset($_POST['submit'])){
		$date = date("y/m/d");
		$numdate = date("m/d");
		echo $number= mysqli_real_escape_string($dbconn, $_POST['controlnumber']);
		//echo $number = $numdate.'-'.$number;

		echo $name=mysqli_real_escape_string($dbconn, $_POST['name']);
		echo $dateofcheque= mysqli_real_escape_string($dbconn, $_POST['dateofcheque']);
		echo $particulars= mysqli_real_escape_string($dbconn, $_POST['purpose']);
		echo $amount=mysqli_real_escape_string($dbconn, $_POST['amount']);
		
		$sql="insert into cheque (date, number, dateofcheque, name, particulars, amount) 
			  values ('$date', '$number', '$dateofcheque', '$name', '$particulars', '$amount')";
		mysqli_query($dbconn, $sql) or die ("Can't Insert into incoming Title");
	}

?>
<html>
<head>
	<title>CHEQUES</title>
</head>
<body>
	<h1 align="center">CHEQUES</h1>
	<form method="post">
		<table align="center" cellspacing="5">
			<tr>
				<th>Date</th>
				<td><input type = "date" name = "dateofcheque"</td>
			</tr>
			<tr>
				<th>Number</th>
				<td><input type="text" name="controlnumber" value="" placeholder="2015-001"/></td>
			</tr>
				<th>Name</th>
				<td><input type="text" name="name" value=""/></td>
			</tr>
			<tr>
				<th>Particulars</th>
				<td><input type = "text" name="purpose" value =""></td>
			</tr>
			<tr>
				<th>Amount</th>
				<td><input type = "text" name="amount" value = ""></td>
			<tr>
				<td>&nbsp&nbsp</td>
				<td><input type="submit" name="submit" value="OK"/></td>
			</tr>
		</table>
	</form>
</body>
</html>