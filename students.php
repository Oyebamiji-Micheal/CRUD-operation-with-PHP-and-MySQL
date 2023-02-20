<?php
require_once 'connection.php';
if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $stack = $_POST['stack'];
    $password = $_POST['password'];

    $query = "insert into `csc_pythins` (name, email, mobile, stack, password)
    values('$name', '$email', '$mobile', '$stack', '$password')";
    $result = mysqli_query($con, $query);
    if($result)
    {
        header('location:display.php');
    }
    else
    {
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile Number</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Stack</label>
                <input type="text" class="form-control" placeholder="Enter your current stack" name="stack" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
  </body>
</html>