<?php
    include('connection.php');

    $query="INSERT INTO `training`.`user_info` (`id` ,`t_tile` ,`t_desc` ,`institute` ,`address` ,`t_year` ,`duration` ,`s_date` ,`e_date` ,`c_title` ,`trainer`)
            VALUES ('', '$_POST[t_tile]', '$_POST[t_desc]', '$_POST[institute]', '$_POST[address]', '$_POST[t_year]', '$_POST[duration]', '$_POST[s_date]', '$_POST[e_date]', '$_POST[c_title]', '$_POST[trainer]');";

    if(mysqli_query($con,$query))
        echo "Successfully added 1 data";
    else
        die("Error: ".mysqli_error($con));
?>
<br />
<a href="training.html"><b>Add New Record</b></a>