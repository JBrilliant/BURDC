<!DOCTYPE html>
<html>
<body>

<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="999999999" />
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

</body>
</html>