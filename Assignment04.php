<?php

$a = 'Welcome';
 
$b = 'Bangladesh';

$c = $a.$b;
 
echo " $c \n";

//sort an array of strings by their length, in ascending order using "usort()"

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1, 9, 17, 0);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}



/* to remove the first and last element from an array 
and return the remaining elements as a new array use "array_pop"*/

/*
$sports = array("Baseball", "Cricket", "Football", "Shooting");
 
// Deleting last array item
$removed = array_pop($sports);
print_r($sports);
echo "<br>";
var_dump($removed);



// PHP program to check given string is 
    // whitespace  character or not 
    $strings = array('Masud','$%#@!', '789543', "\n", '\t', "\t");
      
    // Checking above given strings 
    // by used of ctype_space()function .
    foreach ($strings as $testcase) {
          
        if (ctype_space($testcase)) {
            echo "Yes \n";
        } else {
            echo "No \n";
        }
    }

//Second highest number in an array

$num = array(10, 20, 52, 55, 75, 15, 61, 56, 65);
$max = $num[0];
for($i=1; $i<count($num); $i++){
	if($num[$i]>$max){
		$smax = $max;
		$max = $num[$i];
	}else if($smax<$num[$i] && $smax < $max){
		$smax = $num[$i];
	}
}
echo "Second Largest element is = ".$smax; */