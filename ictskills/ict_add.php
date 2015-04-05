<?php
include('connection.php');

    $query="INSERT INTO `training`.`ict` (`id` ,`exp_category` ,`skill` ,`skill_description` ,`ext_activities`)
                VALUES ('', '$_POST[exp_category]', '$_POST[skill]', '$_POST[skill_description]', '$_POST[ext_activities]');";

if(mysqli_query($con,$query))
    echo "Successfully added 1 data";
else
    die("Error: ".mysqli_error($con));
?>
<br />
<a href="ictskills.html"><b>Add New Record</b></a>