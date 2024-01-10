<?php
$success = 0;
$user = 0;
$invalid=0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php'; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword= $_POST['cpassword'];

    $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            // User already exists
            $user = 1;
        } else {
            if($password===$cpassword){

            
            // User does not exist, proceed with registration
            $sql = "INSERT INTO registration(username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                // Signup successful
                $success = 1;
                // header('location:login.php');
            } else {
                // Signup failed
                // die(mysqli_error($con));
                $invalid=1;
            }
        }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>signup</title>
</head>
<body>
<?php
if ($success) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Signup Successful!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}

if ($user) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>User Already Exists!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
if ($invalid) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>User Already Exists!</strong>Invalid credentials
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
}
?>

<h1 class="text-center">Sign up page</h1>
<div class="container mt-5">
    <form action="sign.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" placeholder="Enter your user name" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" placeholder="Enter your Password" name="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" placeholder="confirm Password" name=" cpassword">
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign up</button>
    </form>
</div>
</body>
</html>
