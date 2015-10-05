<?php
	include 'connection.php';
?>
<html>
<head>
	<title>INVENTION</title>
	<script type="text/javascript">
		var counter = 0;
			function add_user(){
				counter++;
				var newFields = document.getElementById('add_user_profile').cloneNode(true);
				newFields.id = '';
				newFields.style.display = 'block';
				var newField = newFields.childNodes;
				for (var i=0;i<newField.length;i++) 
				{
					var theName = newField[i].name;
						if (theName)
						newField[i].name = theName + counter;
				}
				var insertHere = document.getElementById('new_user_profile');
				insertHere.parentNode.insertBefore(newFields,insertHere);
			}
		window.onload = moreFields;					 
	</script>
</head>

<body>
	<form>
		<table align="center">
			<tr>
				<td>Calendar Year</td>
				<td><input type="text" /> </td>
			</tr>
			<tr>
				<td>Title</td>
				<td><textarea cols="25" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>College/Campus/Agency  </td>
				<td> 
					<?php
						include 'php/php_tools.php';
					?>
				</td>
			</tr>
			<tr>
				<td>Issue Date </td>
				<td> <input type="date" name="issuedate"/> </td>
			</tr>
			<tr>
				<td>Filling Date</td>
				<td><input type="date" name="fillingdate"></td>
			</tr>
			<tr>
				<td> Patent / Registration No. </td>
				<td> <input type="text" /> </td>
			</tr>
			<tr>
				<td>Publication Date </td>
				<td> <input type="date"/> </td>
			</tr>
			<tr>
				<td>Category</td>
				<td> <input type="text"/></td>
			</tr>
			<tr>
				<td>Inventor/Maker/Designer</td>
				<td> 
				 <div id="add_user_profile"> 
									<?php
											$sql = "Select userprofileID, fname from userprofiletable";
											$result = mysqli_query($dbconn, $sql) or die("Can't connect to 'USER PROFILE' TABLE");
											echo "<select name='user_profile'>";
											echo "<option selected disabled value=''>           -----------           </option>";
											while ($rows = mysqli_fetch_array($result)){
												echo "<option value='$rows[0]'> $rows[1] </option>";
											}
											echo "</select>";										
									
									?>
									</div>
									<span id="new_user_profile"></span>
									<input type="button" onclick="add_user()" value="+">
				<!--
					<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
					<?php
						include 'php/php_researchers.php';
					?>
					</form>-->
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td> <input type="text" /></td>
			</tr>
			<tr>
				<td>Remarks</td>
				<td> <textarea cols="25" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><input type="button" value="Submit"></td>
			</tr>
		</table>
	</form>
	<br><br>
</body>
</html>