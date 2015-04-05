<?php
    include('connection.php');

    $id=$_GET['id'];
    $query="SELECT * FROM `training`.`user_info` WHERE `user_info`.`id` = $id";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);

    /*$academic=$rows['academic'];
    $institution=$rows['institution'];
    $result_type=$rows['result_type'];*/
?>

<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <title>Education and training</title>
    <!--<meta name="description" content="">
    <meta name="viewport" content="width=device-width">-->
</head>
<body>
<form action="t_list.php?id=<?php echo $_GET['id'] ?>" method="post">
    <input type="hidden" id="update_id" value="<?php echo $id ?>" />
    <table>
        <thead><h2>Training Details</h2></thead>
        <tr>
            <td width="200px">
                <label>Training Title</label>
            </td>
            <td>
                <input type="text" name="t_tile" value="<?php echo $rows['t_tile']?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Training Description</label>
            </td>
            <td>
                <!--<textarea name="t_desc"></textarea>-->
                <input type="text" name="t_desc" value="<?php echo $rows['t_desc']?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Institute</label>
            </td>
            <td>
                <input type="text" name="institute" value="<?php echo $rows['institute']?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Address</label>
            </td>
            <td>

                <!--<textarea name="address"></textarea>-->
                <input type="text" name="address" value="<?php echo $rows['address']?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Training Year</label>
            </td>
            <td>
                <input type="text" name="t_year" value="<?php echo $rows['t_year']?>">
            </td>
        </tr>
        <tr>
            <td>
                <label>Duration(In Year)</label>
            </td>
            <td>
                <input type="text" name="duration" value="<?php echo $rows['duration']?>">
            </td>
        </tr>
    </table>
    <table>
        <thead><h2>Course Details</h2></thead>
        <tr>
            <td width="200">
                <label>Start Date</label>
            </td>
            <td>
                <input type="text" name="s_date" value="<?php echo $rows['s_date']?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label>End Date</label>
            </td>
            <td>
                <input type="text" name="e_date" value="<?php echo $rows['e_date']?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Course Title</label>
            </td>
            <td>
                <input type="text" name="c_title" value="<?php echo $rows['c_title']?>" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Trainer Details</label>
            </td>
            <td>
               <!-- <textarea name="trainer"></textarea>-->
                <input type="text" name="trainer" value="<?php echo $rows['trainer']?>" />
            </td>
        </tr>
        <tr>
            <td><button type="submit" name="update">Update</button></td>
            <td></td>
        </tr>
    </table>
</form>
<br />
<a href="t_list.php"><b>Go to List</b></a>
</body>
</html>