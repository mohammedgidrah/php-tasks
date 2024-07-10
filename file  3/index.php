<?php
// task1 

function primeCheck($num)
{
    if ($num == 1)
        return false;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$primeNumber = primeCheck(3);

if ($primeNumber == true) {
    echo  "Is Prime";
} else {
    echo "Is Not Prime";
}
echo "<br>";
echo "<br>";

// task 2 

echo strrev("remove");

echo "<br>";
echo "<br>";
// task  3
function islowercase($string)
{
    return ctype_lower($string);
}

$string = "example";
if (islowercase($string)) {
    echo "Your String is Ok ";
} else {
    echo "Your String is not Ok ";
}
echo "<br>";
echo "<br>";
// task 4
function swap(&$x, &$y)
{
    $temp = $x;
    $x = $y;
    $y = $temp;
}
$x = 12;
$y = 10;

swap($x, $y);
echo "After swapping: x = $x, y = $y\n";

echo "<br>";
echo "<br>";
// task 6 ??????
function isArmstrong($number)
{
    $digits = str_split($number);
    $numDigits = count($digits);
    $sum = 0;
    
    foreach ($digits as $digit) {
        $sum += pow($digit, $numDigits);
    }
    
    return $sum == $number;
}

$number = 407;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
// task 7 ????????
echo "<br>";
echo "<br>";
function isPalindrome($string) {
    $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
    
    return $cleanedString == strrev($cleanedString);
}

$string = "A man, a plan, a canal, Panama";
if (isPalindrome($string)) {
    echo "\"$string\" is a palindrome.";
} else {
    echo "\"$string\" is not a palindrome.";
}
// task 8
echo "<br>";
echo "<br>";
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$array = [1, 2, 2, 3, 4, 4, 5];
$uniqueArray = removeDuplicates($array);



echo "Array with duplicates removed: ";
print_r($uniqueArray);
