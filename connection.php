<?php
$con = new mysqli('localhost', 'root', '', 'php_practice', 3325);
if (!$con) {
    die(mysqli_error($con));
}
?>
