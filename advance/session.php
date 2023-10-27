<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>
<?php
$_SESSION_start();
$_SESSION ['USER_NAME']='pavithra ';
$_SESSION ['ADDRACE']='abcd';
echo $_SESSION ['USER_NAME'];
echo  $_SESSION ['ADDRACE'];
if(!isset( $_SESSION ['USER_NAME'])){
echo "you are not logged in!";
}
else{
echo "you are logged in";
}

?>

</body>
</html>