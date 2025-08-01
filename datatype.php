<?php

$price = 50; //integer
$score = 90.58; //double

$name = "Kittitouch Tantiwong"; //String
$isvalid = false;

$price = $price + 100; // 50 + 100; => $price is now 150 (integer)

echo "--- Initial Values and Types ---<br>";
echo $name . "<br>";
echo $isvalid . "<br>"; // Note: false echoes as an empty string
echo $price . "<br>";
echo $score . "<br>";

echo "<hr>";

echo "--- Using gettype() ---<br>";
echo gettype($name) . "<br>"; // string
echo gettype($isvalid) . "<br>"; // boolean
echo gettype($score) . "<br>"; // double
echo gettype($price) . "<br>"; // integer

echo "<hr>";

echo "--- Correctly using settype() and gettype() ---<br>";

// Change the type of $score to integer
settype($score, "integer"); // Notice the typo is fixed
echo "The new type of score is: " . gettype($score) . "<br>"; // This will now show "integer"
echo "The new value of score is: " . $score . "<br>"; // The value is now 90 (decimals are dropped)

echo "<br>";

// Change the type of $price to string
settype($price, "string");
echo "The new type of price is: " . gettype($price) . "<br>"; // This will now show "string"
echo "The new value of price is: " . $price . "<br>"; // The value is now "150"

?>