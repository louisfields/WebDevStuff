<?php
// File Name: 8Functions.php
//
// 1) howSwedish
// ABBA is a band, they have many songs including Dancing Queen, and
// Fernando. ABBA is actually a Swedish band, so if we wanted to find
// out howSwedish a String is, we could simply find out how many times
// the String contains the substring "abba". We want to look for this
// substring in a case insensitive manner. So "abba" counts, and so
// does "aBbA". We also want to check for overlapping abba's such as
// in the String "abbAbba" that contains "abba" twice.
//
// howSwedish("ABBA a b b a") returns 1
// howSwedish("abbabba!") returns 2
$str = 'abbabba';
function howSwedish($str) {
   $i;
   $count = 0;
   $toThis = 'abba';
   $str = strtolower($str);
   if(strlen($str) >= 4){
   	for ($i = 0; $i < strlen($str) - 3; $i++) {
   		$compareThis = substr($str, $i, $i + 4);
   		if ((strcmp($compareThis, $toThis)) == 0) {
   			$count++;
   		}
   		
   	}
   }
  print($count);
  return $count;
}


// function howSwedish(str) {
// 	var i;
// 	var count = 0;
// 	str = str.toLowerCase();
// 	if (str.length >= 4) {
// 		for (i = 0; i < str.length - 3; i++) {
// 			if ((str.substring(i, i + 4).localeCompare("abba")) == 0) {
// 				count++;
// 			}
			
// 		}
// 	}
// 	return count;
// }





// 2) sumOfFirstInts
// Return the sum of the first n integers
// sumOfFirstInts(3) == 1 + 2 + 3
// Precondition: $n >= 0 (no negatives, integers only)
function sumOfFirstInts($n) {
  return - 999;
}

// 3) factorial
//
// Given an integer $n, return $n!
// factorial(0) returns 1
// factorial(1) returns 1
// factorial(2) returns 2 * 1
// factorial(3) returns 3 * 2 * 1
// factorial(4) returns 4 * 3 * 2 * 1
//
// Precondition:  $n >= 0 and is an integer
function factorial($n) {
  return -999;
}

// 4)  mirrorEnds
// Complete method mirrorEnds that given a string, looks for a mirror
// image (backwards) string at both the beginning and end of the given string.
// In other words, zero or more characters at the very beginning of the given
// string, and at the very end of the string in reverse order (possibly overlapping).
// For example, "abXYZba" has the mirror end "ab".
//
// assert("" == mirrorEnds(""));
// assert("" == mirrorEnds("abcde"));
// assert("a" == mirrorEnds("abca"));
// assert("aba" ==  mirrorEnds("aba"));
//
function mirrorEnds($str) {
  return "TBA";
}

// 5) isStringSorted
// Given a String, return true if the letters are in ascending order.
// Note: 'a' < 'b' and '5' < '8'
// isStringSorted("") returns true
// isStringSorted("a") returns true
// isStringSorted("abbcddef") returns true
// isStringSorted("123456") returns true
// isStringSorted("12321") returns false
function isStringSorted($str) {
   return false;
}

// 6) maxBlock
// Given a string, return the length of the largest "block" in the string.
// A block is a run of adjacent chars that are the same.
// maxBlock("hoopla") returns 2
// maxBlock("abbCCCddBBBxx") returns 3
// maxBlock("") returns 0
//
function maxBlock($str) {
  return "TBA";
}


// 7) numberOfPairs
//
// Return the number of times a pair occurs in array. A pair is any two String values that are equal (case
// sensitive) in consecutive array elements. The array may be empty or have only one element. In both of
// these cases, return 0.
//
// numberOfPairs( ['a', 'b', 'c'] ) returns 0
// numberOfPairs( ['a', 'a', 'a'] ) returns 2
// assert(2 == numberOfPairs( ['a', 'a', 'b', 'b'] ) );
// numberOfPairs(  [] ) returns 0
// numberOfPairs( ['a'] ) returns 0
//
// Precondition: $arr has all the same type of elements
function numberOfPairs($arr) {
  return -999;
}


// 8) frequency
//
// Given an  array of integers in the range of 0..10 (like quiz scores),
// return an array of 11 integers where the first value (at index 0) is the
// number of 0s in the array argument, the second value (at index 1) is the number
// of ones in the array and the 11th value (at index 10) is the number of
// tens in the array. The following asserts must pass.

// $arr = frequency([0, 1, 1, 8, 10, 10]);
// assert($arr[0] == 1);
// assert($arr[1] == 2);
// assert($arr[5] == 0);
// assert($arr[8] == 1);
// assert($arr[10] == 1);
// 
// Precondition: $arr has valid ints in the range of 0..10
function frequency($arr) {
    return [];
}

///////////// TESTS

?>