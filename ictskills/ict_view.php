<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `training`.`ict` WHERE `ict`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $c="<br />";
    echo $c."ID".str_repeat('&nbsp;',37).": "."<b>".$row['id']."</b>".$c;
    echo $c."Experience Category".str_repeat('&nbsp;',7).": "."<b>".$row['exp_category']."</b>".$c;
    echo $c."Skill".str_repeat('&nbsp;',34).": "."<b>".$row['skill']."</b>".$c;
    echo $c."Skill Description".str_repeat('&nbsp;',14).": "."<b>".$row['skill_description']."</b>".$c;
    echo $c."Extracurricular Activities: "."<b>".$row['ext_activities']."</b>".$c;
?>
<br />
<a href="ict_list.php">Goto List</a>