<?php
    //This is a crud application with add.php file
    include('connection.php');

    $query="INSERT INTO `training`.`information` (`id` ,`mobile` ,`h_phone` ,`e_contact` ,`email` ,`a_email` ,`c_location` ,`p_address` ,`per_address`,`laptop`)
            VALUES ('', '$_POST[mobile]', '$_POST[h_phone]', '$_POST[e_contact]', '$_POST[email]', '$_POST[a_email]', '$_POST[c_location]', '$_POST[p_address]', '$_POST[per_address]','$_POST[laptop]');";

    if(mysqli_query($con,$query))
        echo "Successfully added 1 data into database";
    else
        die("Error: ".mysqli_error($con));
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
    <br />
    <a href="info.html"><b>Add New Record</b></a>
    </body>
    </html>

<?php mysqli_close($con);?>