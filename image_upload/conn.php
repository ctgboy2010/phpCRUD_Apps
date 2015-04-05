<?PHP
$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost
$db_user = "root"; // change to your database password
$db_password = "lict@2"; // change to your database password
$database = "training"; // provide your database name
$db_table = "photos"; // Your Table Name where you want to Store Your Image.
# STOP HERE
####################################################################
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE
$db = mysqli_connect($hostname, $db_user, $db_password,$database) or die("Error: ".mysqli_error($db));
//mysql_select_db($database,$db);
?>