<?php
    ////This is a crud application with delete.php file

    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `training`.`information` WHERE `information`.`id` = $id";
    mysqli_query($con,$query);
    header('location: list.php');
    mysqli_close($con);
?>