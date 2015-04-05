<?php
    include('connection.php');

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        if(isset($update_id)){
            $sql = "UPDATE `training`.`reference` SET `full_name` = '$_POST[full_name]', `organization` = '$_POST[organization]', `address` = '$_POST[address]', `relation` = '$_POST[relation]', `phoneo` = '$_POST[phoneo]', `phoneh` = '$_POST[phoneh]', `mobile` = '$_POST[mobile]', `email` = '$_POST[email]' WHERE `reference`.`id` = $update_id";
            mysqli_query($con,$sql);
        }
    }

    $query="SELECT * FROM `reference`";
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
            <th>Name</th>
            <th>Organization</th>
            <th>Address</th>
            <th>Relation</th>
            <th>Phone (Office)</th>
            <th>Phone (Home)</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['full_name'] ?></td>
                <td><?php echo $row['organization'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['relation'] ?></td>
                <td><?php echo $row['phoneo'] ?></td>
                <td><?php echo $row['phoneh'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><a href="r_view.php?id=<?php echo $row['id']?>">View</a> | <a href="r_update.php?id=<?php echo $row['id']?>">Edit</a> | <a href="r_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="12"><a href="reference.html"><b>Add New Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>