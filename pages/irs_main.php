<?php
	include '..\php\connection.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IRS (Information and Recieving Section)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet"> <!--bootstrap-->
    <link href="dist/css/flat-ui.css" rel="stylesheet">  <!--flat UI-->
	<link rel="shortcut icon" href="dist/img/RSTC.png"> 
	<link href="css/table_style.css" rel="stylesheet">

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
        <img src="dist/img/RSTC.png" alt="" width="60" height="60"></a>
        <br>
        <br>
        <h2 align="center"> <font color="#FFFFFF"> <font size="+2">Bicol University Research and Development Center </font> <br> <font size = "+1">(Information Receiving Section)</h2>
        </font>
        
      </nav>
		<!--end of navi bar-->
	  
<!--Content/ Application Form-->
<div class = "content">
	<h4 align = "center">&nbsp;</h4>
	<div class="col-md-12">
		<table>
			<tr>
				<td> Control No. </td>
				<td> Date </td>
				<td> Campus </td>
				<td> Sender </td>
				<td> Receiver </td>
				<td> Subject </td>
			</tr>
			<?php
				$query = "SELECT * FROM incoming ORDER BY date DESC";
				$data = mysqli_query($dbconn, $query) or die("Cant extract info");
				while ($row = mysqli_fetch_assoc($data)){
					echo "<tr>";
					echo "<td> $row[number] </td>";
					echo "<td> $row[date] </td>";
					$query = "SELECT ooc FROM oocs WHERE oocID='$row[oocID]'";
					$row2 = mysqli_query($dbconn, $query) or die("Can't extract info");
					$oocs = mysqli_fetch_array($row2);
					echo "<td> $oocs[0] </td>";
					$query = "SELECT cname FROM sender WHERE s_personID='$row[s_personID]'";
					$row2 = mysqli_query($dbconn, $query) or die("Can't extract info");
					$sender = mysqli_fetch_array($row2);
					echo "<td> $sender[0] </td>";
					$query = "SELECT cname FROM reciever WHERE r_personID='$row[r_personID]'";
					$row2 = mysqli_query($dbconn, $query) or die("Can't extract info");
					$reciever = mysqli_fetch_array($row2);
					echo "<td> $reciever[0] </td>";
					$query = "SELECT status FROM status WHERE statusID='$row[statusID]'";
					$row2 = mysqli_query($dbconn, $query) or die("Can't extract info");
					$status = mysqli_fetch_array($row2);
					echo "<td> $status[0] </td>";
					echo "</tr>";
				}
			?>
		</table>
	<!--- </div>
	 <form class="form-inline" role="form">
      <div class="col-md-12"> 
		<table align="center">
			<tr>
				<td> Control Number: </td>
				<td> <input type="text" /> </td>
			</tr>
			<tr>
				<td> &nbsp </td>
				<td> &nbsp </td>
			</tr>
			<tr>
				<td> Date: </td>
				<td> <input type="date" /> </td>
			</tr>
			<tr>
				<td> &nbsp </td>
				<td> &nbsp </td>
			</tr>
			<tr>
				<td> Campus: </td>
				<td> <?php include '../php/campuses.php'; ?> </td>
			</tr>
			<tr>
				<td> &nbsp </td>
				<td> &nbsp </td>
			</tr>
			<tr>
				<td> Sender: </td>
				<td> <input type="text" /> </td>
			</tr>
			<tr>
				<td> &nbsp </td>
				<td> &nbsp </td>
			</tr>
			<tr>
				<td> Receiver: </td>
				<td> <input type="text" /> </td>
			</tr>
			<tr>
				<td> &nbsp </td>
				<td> &nbsp </td>
			</tr>
			<tr>
				<td> Subject/Particular: &nbsp </td>
				<td> <input type="text" /> </td>
			</tr>
			<tr>
				<td> &nbsp </td>
				<td> &nbsp </td>
			</tr>
			<tr>
				<td> Remarks: </td>
				<td> <input type="textdomain" /> </td>
			</tr> -->
		</table>	  
	  </div>
	</form>
<!--End of Form-->
 
</body>
</html>