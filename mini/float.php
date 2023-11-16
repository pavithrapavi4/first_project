<?php
$floatNumber = "3.14";
$sum = bcadd($floatNumber, "2.5", 2);
$product = bcmul($floatNumber, "3", 2);
echo "Original float: $floatNumber<br>";
echo "Sum: $sum<br>";
echo "Product: $product<br>";
?>
