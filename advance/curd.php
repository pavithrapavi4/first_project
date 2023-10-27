<?php
define('HOST_NAME','localhost');
define('USER_NAME','root');
define('PASSWORD','');
define('DATABASE','curd_operation');

$conn= mysqli_connect(HOST_NAME,USER_NAME,PASSWORD ,DATABASE);

if($conn){

die('database connected successfully');
}
else{

echo('database not connected');

}


?>