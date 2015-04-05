<?php
    //This is a crud application with view.php file

    include('connection.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM information WHERE id = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    print_r($row);
?>
<br />
<a href="list.php">Go to List</a>