<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `training`.`reference` WHERE `reference`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $c="<br />";
    echo $c."ID".str_repeat('&nbsp;',23).": "."<b>".$row['id']."</b>".$c;
    echo $c."Reference Name: "."<b>".$row['full_name']."</b>".$c;
    echo $c."Organization".str_repeat('&nbsp;',6).": "."<b>".$row['organization']."</b>".$c;
    echo $c."Address".str_repeat('&nbsp;',14).": "."<b>".$row['address']."</b>".$c;
    echo $c."Relation".str_repeat('&nbsp;',14).": "."<b>".$row['relation']."</b>".$c;
    echo $c."Phone (Office)".str_repeat('&nbsp;',5).": "."<b>".$row['phoneo']."</b>".$c;
    echo $c."Phone (Home)".str_repeat('&nbsp;',5).": "."<b>".$row['phoneh']."</b>".$c;
    echo $c."Mobile".str_repeat('&nbsp;',17).": "."<b>".$row['mobile']."</b>".$c;
    echo $c."Email".str_repeat('&nbsp;',18).": "."<b>".$row['email']."</b>".$c;
?>
<br />
<a href="r_list.php">Goto List</a>
