<?php
	include '../../php/connection.php';
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
    <meta charset="utf-8">
    <title>IRS (Information and Recieving Section)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../dist/css/vendor/bootstrap.min.css" rel="stylesheet"> <!--bootstrap-->
    <link href="../../dist/css/flat-ui.css" rel="stylesheet">  <!--flat UI-->
	<link rel="shortcut icon" href="../dist/img/RSTC.png"> 
	<link href="../../css/table_style.css" rel="stylesheet">
    <script src="../../js/set.js" type="text/javascript"></script>
<style>
.brand {
    position: absolute;
	padding-top: 10px;
    left: 50%;
    margin-left: -50px !important;  /* 50% of your logo width */
    display: block;
}

.content {
	background-color: #eee;
	height: 1000px;
	width: 1100px;
	margin: 20px 130px;
	border-radius: 8px;
	padding: 10px 50px;
	position: absolute;
}

}

</style>	
</head>
<body>

<!--Navi Barr-->
       <nav class="navbar navbar-inverse navbar-lg  navbar-static-top" role="navigation">
		<!--Logo-->
        <a class="brand" style="margin: 0; float: none;">
        <img src="../../dist/img/RSTC.png" alt="" width="60" height="60"></a>
        <br>
        <br>
        <h2 align="center"> <font color="#FFFFFF"> <font size="+2">Bicol University Research and Development Center </font> <br> <font size = "+1">(Information Receiving Section)</h2>
        </font>
        
      </nav>
		<!--end of navi bar-->
	  
<!--Content/ Application Form-->
<div class = "content">
	<div class="col-md-12">
	<h1 align="center"><a>INCOMING</a></h1>
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
				<td><input type="button" onClick="goBack()" name="submit" value="BACK"/></td>
				<td><input type="submit" name="submit" value="OK"/></td>
			</tr>
		</table>
	</form>
    </div>
<!--End of Form-->
</body>
</html>