<?php
//This is a crud application with add.php file
    include('connection.php');

    $query="INSERT INTO `training`.`employment` (`id` ,`com_name` ,`com_business` ,`address` ,`description` ,`department` ,`str_date` ,`pre_end` ,`emp_duration`,`responsibility`)
                VALUES ('', '$_POST[com_name]', '$_POST[com_business]', '$_POST[address]', '$_POST[description]', '$_POST[department]', '$_POST[str_date]', '$_POST[pre_end]', '$_POST[emp_duration]','$_POST[responsibility]');";

    if(mysqli_query($con,$query))
        echo "Successfully added 1 data into database";
    else
        die("Error: ".mysqli_error($con));
    ?>

<br />
<a href="employee.html"><b>Add New Record</b></a>