<?php
include "conn.php";


$uploadDir = 'photos/'; //Image Upload Folder
if(isset($_POST['Submit']))
{
$fileName = $_FILES['Photo']['name'];
$tmpName = $_FILES['Photo']['tmp_name'];
$fileSize = $_FILES['Photo']['size'];
$fileType = $_FILES['Photo']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
$fileName = addslashes($fileName);
$filePath = addslashes($filePath);
}
$query = "INSERT INTO photos ( `id`,`image` ) VALUES ('','$filePath')";
mysqli_query($db,$query) or die('Error, query failed');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form name="Image" enctype="multipart/form-data" action="process.php" method="POST">
<input type="file" name="Photo" size="2000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" size="26"><br/>
<INPUT type="submit" class="button" name="Submit" value=" Submit ">
&nbsp;&nbsp;
</form>
<a href="../index.html">Back</a>
</body>
</html>