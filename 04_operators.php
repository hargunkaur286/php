<?php 

//Operators in PHP
// Arithemetic operators
// Assignment operators
// Comparison operators
// Logical operators

$a = 45;
$b = 8;

// 1. Arithemetic operators
echo "For a+b, the result is: " . ($a + $b) . "<br>";
echo "For a-b, the result is: " . ($a - $b) . "<br>";
echo "For a*b, the result is: " . ($a * $b) . "<br>";
echo "For a/b, the result is: " . ($a / $b) . "<br>";
echo "For a%b, the result is: " . ($a % $b) . "<br>";
echo "For a**b, the result is: " . ($a ** $b) . "<br>";

// 2. Assignment operators
/* $x = $a;
echo "For x, the value is: " . $x . "<br>";

$a += 6;
echo "For a, the value is: " .$a . "<br>";

$a -= 6;
echo "For a, the value is: " .$a . "<br>";

$a *= 6;
echo "For a, the value is: " .$a . "<br>";

$a /= 6;
echo "For a, the value is: " .$a . "<br>"; */


// 3. Comparison Operators
$x = 7;
$y = 78;

echo "For x==y, the result is" . var_dump($x==$y). "<br>";
echo "For x>y, the result is" . var_dump($x>$y). "<br>";
echo "For x<y, the result is" . var_dump($x<$y). "<br>";
echo "For x!=y, the result is" . var_dump($x!=$y). "<br>";
echo "For x<=y, the result is" . var_dump($x<=$y). "<br>";
echo "For x>=y, the result is" . var_dump($x>=$y). "<br>";

// 4. Logical Operators
$m = true;
$n = false;

echo "For m and n, the result is: ";
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is: ";
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is: ";
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is: ";
echo var_dump($m || $n);
echo "<br>";

echo "For !m, the result is: ";
echo var_dump(!$m);
echo "<br>";

?>