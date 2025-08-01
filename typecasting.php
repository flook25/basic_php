<?php

$price=100.12;
$dalivery=50;

$total=$price + $dalivery;
echo $total."<br>";

// echo gettype($total);

echo "Before changing type = ".gettype($total)."<br>";

// type casting
$total = (integer)$total;
echo "After changing type = ".gettype($total);

?>