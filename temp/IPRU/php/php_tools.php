<?php
	$sql = "select collegeID, college from collegetable";
	
	$result = mysqli_query($dbconn, $sql) or die("Can't connect to 'COLLEGETABLE' TABLE");
	echo "<select name='ta'>";
	echo "<option selected disabled value=''>           -----------           </option>";
	while ($rows = mysqli_fetch_array($result)){
	echo "<option value='$rows[0]'> $rows[1] </option>";
	}
	echo "</select>";	
?>
