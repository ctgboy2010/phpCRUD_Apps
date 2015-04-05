<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="DELETE FROM `training`.`ict` WHERE `ict`.`id` = $id";
    mysqli_query($con,$query);
    header('location: ict_list.php');
    mysqli_close($con);
?>