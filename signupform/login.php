<?php
$login = 0;
$invalid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            echo "Login successful";
            $login = 1;
            session_start();
            $_SESSION['username'] = $username;
            header('location: home.php'); // Redirect to the home page
            exit(); // Make sure to exit after the header to prevent further execution
        } else {
            echo "Invalid data";
            $invalid = 1;
        }
    } else {
        echo "Error in query: " . mysqli_error($con);
    }

    mysqli_close($con); // Close the database connection
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
    <h1 class="text-center">Login to our website</h1>
    <div class="container mt-5">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" placeholder="Enter your user name" name="user_name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Enter your Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary mt-5">Login</button>
        </form>
    </div>
</body>
</html>
