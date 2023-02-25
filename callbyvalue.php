<?php
function swap($first, $second)
{
$temp = $first;
$first = $second;
$second = $temp;
echo nl2br("Before swapping\n") ;
echo nl2br("First number: ".$first."\n Second number: ".$second."\n");
}
$a = 5;
$b = 7;

swap ($a, $b);

echo nl2br("After swapping\n") ;
echo nl2br ("First number: ".$a." \nSecond number: ".$b); 
?>