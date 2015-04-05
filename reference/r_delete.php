<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `training`.`reference` WHERE `reference`.`id` = $id";
    mysqli_query($con,$query);
    header('location: r_list.php');
    mysqli_close($con);
?>