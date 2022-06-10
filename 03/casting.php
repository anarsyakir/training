<?php
$var1 = 18; // type integer
$var2 = "18"; // type string
$nilai = 18.5; // type float
$boolean = true; // type boolean
$string2 = "14.5";

echo gettype($string2);
echo "\n";
echo gettype($nilai);
echo "\n";
echo (integer)$nilai; // casting float ke integer
echo "\n";
echo (double)$var1; // casting integer ke float
echo "\n";
echo (integer)$var2; // casting string ke integer
echo "\n";
echo (integer)$boolean; // casting boolean ke integer
echo "\n";

?>