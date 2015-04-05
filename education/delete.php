<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `training`.`academicinfo` WHERE `information`.`id` = $id";
    mysqli_query($con,$query);
    header('location: list.php');
    mysqli_close($con);
?>