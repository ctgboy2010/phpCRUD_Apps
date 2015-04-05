<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `training`.`employment` WHERE `employment`.`id` = $id";
    mysqli_query($con,$query);
    header('location: emp_list.php');
    mysqli_close($con);
?>