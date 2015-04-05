<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `training`.`employment` WHERE `employment`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $c="<br />";
    echo $c."ID".str_repeat('&nbsp;',31).": "."<b>".$row['id']."</b>".$c;
    echo $c."Company Name".str_repeat('&nbsp;',9).": "."<b>".$row['com_name']."</b>".$c;
    echo $c."Company Business".str_repeat('&nbsp;',5).": "."<b>".$row['com_business']."</b>".$c;
    echo $c."Address".str_repeat('&nbsp;',22).": "."<b>".$row['address']."</b>".$c;
    echo $c."Description".str_repeat('&nbsp;',17).": "."<b>".$row['description']."</b>".$c;
    echo $c."Department".str_repeat('&nbsp;',17).": "."<b>".$row['department']."</b>".$c;
    echo $c."From".str_repeat('&nbsp;',27).": "."<b>".$row['str_date']."</b>".$c;
    echo $c."To".str_repeat('&nbsp;',32).": "."<b>".$row['pre_end']."</b>".$c;
    echo $c."Employment Duration: "."<b>".$row['emp_duration']."</b>".$c;
    echo $c."Responsibility".str_repeat('&nbsp;',14).": "."<b>".$row['responsibility']."</b>".$c;
?>
<br />
<a href="emp_list.php">Goto List</a>
