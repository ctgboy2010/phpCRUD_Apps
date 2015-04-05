<?php
    include('connection.php');


    $id=$_GET['id'];
    $query="SELECT * FROM `training`.`ict` WHERE `ict`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);

    $cat_com=$rows['exp_category'];
    $skill_desc=$rows['skill'];
?>


<!DOCTYPE html>
<html>
<head lang="en">

</head>
<body>
<form action="ict_list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />

    <h2>ICT Skills Information</h2>

    <label> Experience Category: </label>
    <select name="exp_category">
        <option <?php if ($cat_com == 'Computer Engineering' ) echo 'selected'; ?> value="Computer Engineering" selected>Computer Engineering</option>
        <option <?php if ($cat_com == 'Accounting' ) echo 'selected'; ?> value="Accounting">Accounting</option>
        <option <?php if ($cat_com == 'IT/Telecommunication' ) echo 'selected'; ?> value="IT/Telecommunication">IT/Telecommunication</option>
        <option <?php if ($cat_com == 'Design' ) echo 'selected'; ?> value="Design">Design</option>
    </select>
    <br>
    <label>Skill: </label>
    <select name="skill">
        <option value="1" selected>Choose Skilled Field</option>
        <option <?php if ($skill_desc == 'Programming' ) echo 'selected'; ?> value="Programming">Programming</option>
        <option <?php if ($skill_desc == 'Database' ) echo 'selected'; ?> value="Database">Database</option>
        <option <?php if ($skill_desc == 'JQuery' ) echo 'selected'; ?> value="JQuery">JQuery</option>
    </select>
    <br>

    <label>Skill Description: </label>
    <input type="text" name="skill_description" value="<?php echo $rows['skill_description']?>" />
    <br>

    <label> Extracurricular Activities: </label>
    <!--<textarea name="extr_activity" cols="40" rows="3" ></textarea>-->
    <input type="text" name="ext_activities" value="<?php echo $rows['ext_activities']?>" />
    <br>

    <!--<button type="submit">Submit</button>-->
    <input type="submit" value="Update" name="update" />
</form>
<a href="ict_list.php"><b>Go To List</b></a>
</body>
</html>