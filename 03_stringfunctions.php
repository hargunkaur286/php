<?php

$name = "Hargun";
$line = "Hargun is the real gangsta";

echo $name;
echo "<br>";

echo "The length of the string is: " . strlen($name);
echo "<br>";

echo "Returns the number of the words: " . str_word_count($line);
echo "<br>";

echo "To reverse a string: " . strrev($line);
echo "<br>";

echo "To return the position of a word in a string: " . strpos($line, "is");
echo "<br>";

echo "To replace something: " . str_replace("Hargun", "Sahib", $line);
echo "<br>";

echo "To repeat a string: " . str_repeat($line, 7);
echo "<br>";

echo "<pre>";
echo rtrim("    this is a good girl    ");
echo "<br>";

echo ltrim("    this is a good girl    ");
echo "<br>";

//pre is used so that html reads all the spaces. else, html does not read all the spaces. 

?>
