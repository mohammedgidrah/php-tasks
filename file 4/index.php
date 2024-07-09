<?php
// task 1
for ($i = 1; $i <= 10; $i++) {
    if ($i < 10) {
        echo $i . "-";
    } else {
        echo $i;
    }
}
echo "<br>";
echo "<br>";
// task 2
$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo $total;
echo "<br>";
echo "<br>";
// task 3
$size = 5;

for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
// task 4
function factorial($number) {
    $factorial = 1;
    
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

$number = 5;
echo "The factorial of $number is: " . factorial($number);
// task 5
echo "<br>";
echo "<br>";
function fibonacci($n) {
    $fibonacci_sequence = [];
    
    $a = 0;
    $b = 1;
    
    for ($i = 0; $i < $n; $i++) {
        $fibonacci_sequence[] = $a;
        
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    
    return $fibonacci_sequence;
}


$fibonacci_sequence = fibonacci(5);

echo  implode(", ", $fibonacci_sequence);
echo "<br>";
echo "<br>";
// task 6
function countCharacter($text, $char) {
    return substr_count(strtolower($text), strtolower($char));
}

$text = "Orange Coding Academy";
$char = 'c';
$count = countCharacter($text, $char);

echo  $count ;
// task 7

echo "<br>";
echo "<br>";
// task 8
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}
echo "<br>";
echo "<br>";

// task 9
function floydTriangle($n) {
    $num = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>";
    }
}

// Example usage
$n = 5;
floydTriangle($n);

echo "<br>";
echo "<br>";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>

</head>
<body>
    <table border="1"  cellpadding="3px" cellspacing="0px">
        <?php

for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<th>$i * $j = ". ($i * $j). "</th>";
    }
    echo "</tr>";
}

        ?>
    </table>
</body>
</html>


