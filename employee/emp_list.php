<?php
    include('connection.php');

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        if(isset($update_id)){
            $sql = "UPDATE `training`.`employment` SET `com_name` = '$_POST[com_name]', `com_business` = '$_POST[com_business]', `address` = '$_POST[address]', `description` = '$_POST[description]', `department` = '$_POST[department]', `str_date` = '$_POST[str_date]', `pre_end` = '$_POST[pre_end]', `emp_duration` = '$_POST[emp_duration]', `responsibility` = '$_POST[responsibility]' WHERE `employment`.`id` = $update_id";
            mysqli_query($con,$sql);
        }
    }

    $query="SELECT * FROM `employment`";
    $result=mysqli_query($con,$query);
?>

    <!DOCTYPE html>
    <html>
    <head>
        <style>
            thead {color:red;}
            tbody {color:blue;}
            tfoot {color:black;}
            table,th,td
            {border:1px solid black;}
        </style>
    </head>
    <body>
    <table border="1" align="center" width="100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Company Name</th>
            <th>Company Business</th>
            <th>Address</th>
            <th>Description</th>
            <th>Department</th>
            <th>From</th>
            <th>To</th>
            <th>Employment Duration</th>
            <th>Responsibility</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['com_name'] ?></td>
                <td><?php echo $row['com_business'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['department'] ?></td>
                <td><?php echo $row['str_date'] ?></td>
                <td><?php echo $row['pre_end'] ?></td>
                <td><?php echo $row['emp_duration'] ?></td>
                <td><?php echo $row['responsibility'] ?></td>
                <td><a href="emp_view.php?id=<?php echo $row['id']?>">View</a> | <a href="emp_update.php?id=<?php echo $row['id']?>">Edit</a> | <a href="emp_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="12"><a href="employee.html"><b>Add New Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>