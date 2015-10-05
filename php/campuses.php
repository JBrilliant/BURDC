<?php
	$query = "SELECT * FROM oocs";
	$choice = mysqli_query($dbconn, $query) or die("Can't Extract Info");
	echo "<select name='college'>";
	echo "<option selected disabled value=''> ----------- </option>";
	while($row = mysqli_fetch_array($choice)){
		echo "<option> $row[1] </option>";
	}
	echo "</select>";
?>