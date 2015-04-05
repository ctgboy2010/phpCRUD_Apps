<?php
    include "connection.php";

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        if(isset($update_id)){
            $sql = "UPDATE `training`.`user_info` SET `t_tile` = '$_POST[t_tile]', `t_desc` = '$_POST[t_desc]', `institute` = '$_POST[institute]', `address` = '$_POST[address]', `t_year` = '$_POST[t_year]', `duration` = '$_POST[duration]', `s_date` = '$_POST[s_date]', `e_date` = '$_POST[e_date]', `c_title` = '$_POST[c_title]', `trainer` = '$_POST[trainer]' WHERE `user_info`.`id` = $update_id";
            mysqli_query($con,$sql);
        }
    }

    $query="SELECT * FROM `user_info`";
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
            <th>Training Title</th>
            <th>Training Description</th>
            <th>Institute</th>
            <th>Address</th>
            <th>Training Year</th>
            <th>Duration</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Course Title</th>
            <th>Trainer Details</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['t_tile'] ?></td>
                <td><?php echo $row['t_desc'] ?></td>
                <td><?php echo $row['institute'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['t_year'] ?></td>
                <td><?php echo $row['duration'] ?></td>
                <td><?php echo $row['s_date'] ?></td>
                <td><?php echo $row['e_date'] ?></td>
                <td><?php echo $row['c_title'] ?></td>
                <td><?php echo $row['trainer'] ?></td>
                <td><a href="t_view.php?id=<?php echo $row['id']?>">View</a> | <a href="t_update.php?id=<?php echo $row['id']?>">Edit</a> | <a href="t_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="12"><a href="training.html"><b>Goto add Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>