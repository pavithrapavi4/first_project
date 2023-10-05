<!-- <?php
$days="thursday";
switch($days){
case "monday":
  echo"my salary day is monday";
  break;
case"tuesday":
  echo"my salary day is tuesday";
  break;
case"wednesday":
  echo "my salary day is wednesday ";
    break;
case"thursday":
  echo "my salary day is thursday";
  break;
default:
  echo"my salary day is different";
  break;
}
?>

<br>
<?php
$x=1;
while($x<=6){
  echo"the number is: $x<br>";
$x++;
}
?>
<?php
$y=0;
while($y<=100){
echo"the value is:$y<br>";
$y+=10;
}

?>
<?php
$z=1;
do{
  echo"the number is:$z<br>";
  $z++;
 
}
while($z<=5);
?>
<?php
for($i=0;$i<=50;$i+=10)
echo"the number is:$i<br>";
?>
<?php
 $var=[5,10,15,485,236,396,786];
 foreach($var as $x);{
 echo" recursive count:".count($var,1)."<br>";
}
?>
<?php
for($i=0;$i<=50;$i+=10)
echo"the number is:$i<br>";
?> -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
