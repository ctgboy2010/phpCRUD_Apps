<?php
 
include "conn.php";
$query = "SELECT * FROM photos";
$result = mysqli_query($db,$query); //or die(mysqli_error($result));
//$row = mysql_fetch_array($result);
while($row = mysqli_fetch_array($result))
	{
?>
<img src="<?php echo $row['image']; ?>" width ="102" height="91">
<?php
}
?>