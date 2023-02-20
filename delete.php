<?php
require_once 'connection.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $query = "delete from `csc_pythins` where id=$id";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
