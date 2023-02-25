<?php

function swap(&$x, &$y) {
	$temp = $x;
	$x = $y;
	$y = $temp;
               
        echo "After swapping<br>";
	echo "The value of x is: ".$x."<br>";
	echo "The value of y is: ".$y."<br><br>";
}

$a = 10;
$b = 20;
echo "Before swapping<br>";
echo "The value of x is: ".$a."<br>";
echo "The value of y is: ".$b."<br><br>";
swap($a, $b);
 

?>
