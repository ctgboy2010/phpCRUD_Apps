<?php
    include('connection.php');

    $query="INSERT INTO `training`.`reference` (`id` ,`full_name` ,`organization` ,`address` ,`relation` ,`phoneo` ,`phoneh` ,`mobile` ,`email`)
                VALUES ('', '$_POST[full_name]', '$_POST[organization]', '$_POST[address]', '$_POST[relation]', '$_POST[phoneo]', '$_POST[phoneh]', '$_POST[mobile]', '$_POST[email]');";

    if(mysqli_query($con,$query))
        echo "Successfully added 1 data";
    else
        die("Error: ".mysqli_error($con));
?>
<br />
<a href="training.html"><b>Add New Record</b></a>