<?php
    include "connection.php";

    if(isset($_POST['update'])){
        $update_id=$_GET['id'];
        if(isset($update_id)){
            $sql = "UPDATE `training`.`ict` SET `exp_category` = '$_POST[exp_category]', `skill` = '$_POST[skill]', `skill_description` = '$_POST[skill_description]', `ext_activities` = '$_POST[ext_activities]' WHERE `ict`.`id` = $update_id";
            mysqli_query($con,$sql);
        }
    }

    $query="SELECT * FROM `ict`";
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
            <th>Experience Category: </th>
            <th>Skill: </th>
            <th>Skill Description: </th>
            <th>Extracurricular Activities: </th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){ ?>
            <tr align="center">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['exp_category'] ?></td>
                <td><?php echo $row['skill'] ?></td>
                <td><?php echo $row['skill_description'] ?></td>
                <td><?php echo $row['ext_activities'] ?></td>
                <td><a href="ict_view.php?id=<?php echo $row['id']?>">View</a> | <a href="ict_update.php?id=<?php echo $row['id']?>">Edit</a> | <a href="ict_delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure want to delete id = <?php echo $row['id'] ?> ?');">Delete</a></td>

            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
        <tr>
            <td align="center" colspan="12"><a href="ictskills.html"><b>Goto add Record</b></a></td>
        </tr>
        </tfoot>
    </table>
    </body>
    </html>

<?php mysqli_close($con);?>