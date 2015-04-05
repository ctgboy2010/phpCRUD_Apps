<?php
    include('config.php');
    //$con=mysqli_connect("localhost","root","lict@2","personal_info") or die("Error: ".mysqli_error($con));
    $id = $_GET['id'];

    $query = "SELECT * FROM `personal_info`.`personalinfo` WHERE `personalinfo`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    print_r($row);
?>
<br />
<a href="list.php">Goto List</a>