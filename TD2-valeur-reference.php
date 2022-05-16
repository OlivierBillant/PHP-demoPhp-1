<?php

$a = "Php";
$b = "Java";
$a = $b;
$b = "Pyhton";

echo $a."<br>";
echo $b."<br>";

$a = &$b;
echo $b."<br>";