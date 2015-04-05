<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="SELECT * FROM `training`.`employment` WHERE `employment`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employment History</title>
</head>
<body>
<h2>Employment History</h2>
<form action="emp_list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <div>
        <label>Company Name* </label>
        <input type="text" name="com_name" value="<?php echo $rows['com_name']?>" />
    </div>
    <div>
        <label>Company Business </label>
        <input type="text" name="com_business" value="<?php echo $rows['com_business']?>" />
    </div>
    <div>
        <label>Address </label>
        <input type="text" name="address" value="<?php echo $rows['address']?>" />
    </div>
    <div>
        <label>Description* </label>
        <input type="text" name="description" value="<?php echo $rows['description']?>" />
    </div>
    <div>
        <label>Department </label>
        <input type="text" name="department" value="<?php echo $rows['department']?>" />
    </div>
    <div>
        <label>From </label>
        <input type="date" name="str_date" value="<?php echo $rows['str_date']?>" />
    </div>
    <div>
        <label>To </label>
        <!--<input type="radio" name="pre_end" value="Present" id="present" selected />
        <label>Present </label>
        <input type="radio" name="pre_end" value="" id="end_date" />-->
        <input type="date" name="pre_end" value="<?php echo $rows['pre_end']?>" />
    </div>
    <div>
        <label>Employment Duration <br />(Years) </label>
        <input type="text" name="emp_duration" value="<?php echo $rows['emp_duration']?>" />
    </div>
    <div>
        <label>Responsibility* </label>
        <input type="text" name="responsibility" value="<?php echo $rows['responsibility']?>" />
    </div>
    <div>
        <br />
        <input type="submit" value="Update" name="update" />
    </div>
</form>
<br />
<a href="emp_list.php"><b>Go To List</b></a>
</body>
</html>