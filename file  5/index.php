<pre>
<?php
//PHP String and String Functions	  
//task 1       	
$string = "welcom to file 5";
echo "uppercase : " . strtoupper($string);
echo "<br>";
echo "<br>";
echo "lowercase : " . strtolower($string);
echo "<br>";
echo "<br>";

echo "first letter uppercase : " . ucfirst($string);
echo "<br>";
echo "<br>";
echo " first letter of each word capitalized : " . ucwords($string);
echo "<br>";
echo "<br>";
//task2
$str_date = "085119";
$hour = substr($str_date, 0, 2);
$min = substr($str_date, 2, 2);
$sec = substr($str_date, 4, 2);

echo " the time is =>  " . $hour . ":" . $min . ":" . $sec;
echo "<br>";
echo "<br>";

//task 3
$search="I am a full stack developer at orange coding academy";
$word = "hi";
if (strpos($search, $word) !== false) {
    echo $word . "  Found ! ";
} else
echo $word . "  Not found";
echo "<br>";
echo "<br>";
//task 4
$url = 'www.orange.com/index.php';
$extract = explode("/", $url)[1];
echo ($extract);
echo $word . " Not found";
echo "<br>";
echo "<br>";

//task 5
$email = "info@orange.com";
$extract = explode("@", $email)[0];
echo $extract;
echo "<br>";
echo "<br>";

//task 6
echo substr($email, -3);
echo "<br>";
echo "<br>";

//task 7
$base = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_";
$len = 10;
echo substr(str_shuffle($base), 0, $len);

echo "<br>";
echo "<br>";

//task 8
echo str_replace("welcom", "hi ", $string);
echo "<br>";
echo "<br>";


//task 9
$string1 = "dragonball";
$string2 = "dragonboll";


for ($i = 0; $i < strlen($string1); $i++) {
    if ($string1[$i] != $string2[$i]) {
        echo "First difference between two strings at position " . $i  . ": " . $string1[$i] . " vs " . $string2[$i];
        echo "<br>";
    }
}
echo "<br>";
echo "<br>";
//task 10
$string = "Twinkle, twinkle, little, star";
var_dump(explode(",",   $string));

echo "<br>";
echo "<br>";
//task 11
function getNextLetter($letter) {
    // Validate input
    if (strlen($letter) !== 1 || !ctype_alpha($letter)) {
        return "Invalid input. Please enter a single alphabetical character.";
    }

    // Convert to lowercase to handle case insensitivity
    $letter = strtolower($letter);

    // Calculate the next letter
    $nextLetter = chr((ord($letter) - ord('a') + 1) % 26 + ord('a'));

    return $nextLetter;
}

// Example usage
$inputLetter = 'a';
echo "Input Letter: $inputLetter\n";
$nextLetter = getNextLetter($inputLetter);
echo "Next Letter: $nextLetter\n";
echo "<br>";
echo "<br>";

//task 12
$original = 'The brown fox';
$insert = 'quick ';
$insert_pos = 4;
$newstring = substr_replace($original, $insert, $insert_pos, 0);
echo $newstring;
echo "<br>";
echo "<br>";

//task 13
$original = "000065722.24";
echo trim($original, "0");
echo "<br>";
echo "<br>";


//task 14
$original = 'The quick brown fox jumps over the lazy dog';
$insert = 'fox';
echo str_replace($insert, "", $original);
echo "<br>";
echo "<br>";

//task 15
$original = "The quick brown fox jumps over the lazy dog---";
echo trim($original, "-");
echo "<br>";
echo "<br>";

//task 16
$original = '\"\1+2/3*2:2-3/4*3';
echo  str_replace(array('\"', '"', '/', '-', '+', ':', '*', '\\'), ' ', $original);
echo "<br>";
echo "<br>";

//task 17
$original = "The quick brown fox jumps over the lazy dog";
echo implode(" ", array_slice(explode(" ", $original), 0, 5));
echo "<br>";
echo "<br>";

//task 18

$num_str = "2,543.12";
echo str_replace(",", "", $num_str);
echo "<br>";
echo "<br>";

//task 19
$str = "";
for ($i = 97; $i <= 122; $i++) {
    $str .= chr($i) . " ";
}
echo "small charecter: $str";
echo "<br>";
echo "<br>";
$str = "";
for ($i = 65; $i <= 90; $i++) {
    $str .= chr($i) . " ";
}
echo "capital charecter: $str";


?>
</pre>