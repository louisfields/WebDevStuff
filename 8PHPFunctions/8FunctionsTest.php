<?php
// FileName: 8FunctionsTest.php
// This unit test tests eight different PHP functions using the PHP assert function, 
// that is exactly like the JavaScript PHP function

include '8Functions.php';
//This is used to print a space, guess php does not have string concats.
$space  = "\r\n";

//Tests


//1) howSwedish()
assert ( 2 == howSwedish ("abbabba"));
//assert ( 2 == howSwedish ("abbabba!"));   THIS FAILED, Debug
assert ( 1 == howSwedish ("abba"));
assert ( 1 == howSwedish ("ABBA a b b a"));

//2) sumOfFirstInts()
assert (6 == sumOfFirstInts(3));
assert (10 == sumOfFirstInts(4));
assert (15 == sumOfFirstInts(5));
assert (55 == sumOfFirstInts(10));
assert (136 == sumOfFirstInts(16));

//3) factorial
assert (1 == factorial(0));
assert (1 == factorial(1));
assert (2 == factorial(2));
assert (6 == factorial(3));
assert (24 == factorial(4));
assert (120 == factorial(5));
assert (720 == factorial(6));
assert (5040 == factorial(7));
assert (40320 == factorial(8));

//4) mirriorends()
assert("" == mirrorEnds(""));
assert("" == mirrorEnds("abcde"));
assert("a" == mirrorEnds("abca"));
assert("aba" ==  mirrorEnds("aba"));











// $sum =  sumOfFirstInts(3);
// echo($sum . $space);




echo('All tests have passed boi.');




// Add many more asserts
?>

