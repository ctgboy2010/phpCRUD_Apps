<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `training`.`user_info` WHERE `user_info`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $c="<br />";
    echo $c."ID".str_repeat('&nbsp;',29).": "."<b>".$row['id']."</b>".$c;
    echo $c."Training Title".str_repeat('&nbsp;',11).": "."<b>".$row['t_tile']."</b>".$c;
    echo $c."Training Description: "."<b>".$row['t_desc']."</b>".$c;
    echo $c."Institute".str_repeat('&nbsp;',20).": "."<b>".$row['institute']."</b>".$c;
    echo $c."Address".str_repeat('&nbsp;',20).": "."<b>".$row['address']."</b>".$c;
    echo $c."Training Year".str_repeat('&nbsp;',11).": "."<b>".$row['t_year']."</b>".$c;
    echo $c."Duration".str_repeat('&nbsp;',19).": "."<b>".$row['duration']."</b>".$c;
    echo $c."Start Date".str_repeat('&nbsp;',17).": "."<b>".$row['s_date']."</b>".$c;
    echo $c."End Date".str_repeat('&nbsp;',19).": "."<b>".$row['e_date']."</b>".$c;
    echo $c."Course Title".str_repeat('&nbsp;',14).": "."<b>".$row['c_title']."</b>".$c;
    echo $c."Trainer Details".str_repeat('&nbsp;',9).": "."<b>".$row['trainer']."</b>".$c;
?>
<br />
<a href="t_list.php">Goto List</a>

