<?php
require_once 'connection.php';
$id = $_GET['updateid'];
$query = "select * from `csc_pythins` where id=$id";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$stack = $row['stack'];
$password = $row['password'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    echo $name;
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $stack = $_POST['stack'];
    $password = $_POST['password'];

    $query = "update `csc_pythins` set id=$id, name='$name', email='$email', mobile='$mobile', stack = '$stack', password='$password' where id=$id";
    $result = mysqli_query($con, $query);
    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Stack</label>
                <input type="text" class="form-control" placeholder="Enter your current stack" name="stack" autocomplete="off" value=<?php echo $stack; ?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
  </body>
</html>