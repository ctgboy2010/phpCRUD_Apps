<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="SELECT * FROM `training`.`reference` WHERE `reference`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Reference</title>
</head>
<body>
<h1>Add Reference</h1>
<form action="r_list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <div>
        <label>Name* </label>
        <input type="text" name="full_name" value="<?php echo $rows['full_name']?>" />
    </div>
    <div>
        <label>Organization* </label>
        <input type="text" name="organization" value="<?php echo $rows['organization']?>" />
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $rows['address']?>" />
    </div>
    <div>
        <label>Relation</label>
        <input type="text" name="relation" value="<?php echo $rows['relation']?>" />
    </div>
    <div>
        <label>Phone (Office)* </label>
        <input type="text" name="phoneo" value="<?php echo $rows['phoneo']?>" />
    </div>

    <div>
        <label>Phone (Home) </label>
        <input type="text" name="phoneh" value="<?php echo $rows['phoneh']?>" />
    </div>
    <div>
        <label>Mobile* </label>
        <input type="text" name="mobile" value="<?php echo $rows['mobile']?>" />
    </div>
    <div>
        <label>Email* </label>
        <input type="text" name="email" value="<?php echo $rows['email']?>" />
    </div>
    <input type="submit" Value='Update' name="update" />
</form>
<br />
<a href="r_list.php"><b>Go to List</b></a>
</body>
</html>