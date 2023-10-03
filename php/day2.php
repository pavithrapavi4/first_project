<?php
$x=6;
$y=9;
$z=$x+$y; 
echo"$z";
?>
<br>
<?php
$x=6;
$y=9;
$z=$x-$y; 
echo"$z";
?>
<br>
<?php
$x=6;
$y=9;
$z=$x*$y; 
echo"$z";
?>
<br>
<?php
$x=6;
$y=9;
$z=$x/$y; 
echo"$z";
?>
<br>
<?php
$x=6;
$y=9;
$z=$x%$y; 
echo"$z";
?>
<br>
<?php
$x=6;
$y=9;
$z=$x**$y; 
echo"$z";
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x==$y);
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x!==$y);
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x!=$y);
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x<>$y);
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x>=$y);
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x<=$y);
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x>$y);
?>
<br>
<?php
$x=100;
$y='100';
var_dump($x<$y);
?>
<br>
<?php
$x=89;
$y=67;
if($x==89 && $y==67){
    echo"hello world";

}
?>
<br>
<?php
$x=89;
$y=67;
if($x==100 || $y==67){
    echo"hello world";

}
?>
<br>
<?php
$x=89;
$y=67;
if($x!=100){
    echo"hello world";

}
?>
<br>

<?php
$txt1="hello";
$txt2="world";
echo $txt1.$txt2;
$txt1.=$txt2;
echo $txt1;
?>
<br>
<?php
$x=array("a"=>"red","b"=>"green");
$y=array("c"=>"blue","d"=>"yellow");
print_r($x+$y);
?>
<br>
<?php
$x=array("a"=>"red","b"=>"green");
$y=array("c"=>"blue","d"=>"yellow");
var_dump($x==$y);
?>
<?php




?>