<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `training`.`user_info` WHERE `user_info`.`id` = $id";
    mysqli_query($con,$query);
    header('location: t_list.php');
    mysqli_close($con);
?>