<?php
// file 2 task1
$citis = array("Dubai", "Riyadh", "Turkey", "Egypt", "Paris", "Switzerland", "America", "Saudi Arabia", "Morocco", "Germany");
$arr_rev = array();
for ($i = sizeof($citis) - 1; $i >= 0; $i--) {
    array_push($arr_rev, $citis[$i]);
}
print_r($arr_rev);

echo "<br>";
echo "<br>";

echo array_search("Egypt", $citis);

echo "<br>";
echo "<br>";


if (($key = array_search("Paris", $citis)) !== false) {
    unset($citis[$key]);
}
print_r($citis);


echo "<br>";
echo "<br>";

print_r(array_slice($citis, 1, 3));

echo "<br>";
echo "<br>";

// file 2 task2

$products = ["Apple" => 1.20, "Banana" => 0.50, "Orange" => 0.80];

ksort($products);
foreach ($products as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo "<br>";
echo "<br>";

asort($products);
foreach ($products as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo "<br>";
echo "<br>";



$totalPrice = array_sum($products);
$numProducts = count($products);
$avarege = $totalPrice / $numProducts;
echo "the average is $avarege";



echo "<br>";
echo "<br>";


$maxPrice = max($products);
echo ($maxPrice);


echo "<br>";
echo "<br>";


// file 2 task3

$books = array(
    [
        "title" => "The Catcher in the Rye",
        "author" => "J.D. Salinger",
        "year" => 2020
    ],
    [
        "title" => "Aoby-Dick",
        "author" => "Herman Melville",
        "year" => 2019
    ]
);

foreach ($books as $book) {
    if ($book["year"] > 2010) {
        echo "Title: " . $book["title"] . "<br>";
        echo "Author: " . $book["author"] . "<br>";
        echo "Year: " . $book["year"] . "<br>";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
$books += $newBook = [
    "title" => "Harry Potter and the Philosopher's Stone",
    "author" => "J.K. Rowling",
    "year" => 1997
];

print_r($books);

echo "<br>";
echo "<br>";

$books[0]["title"] = "hi";
$books[0]["author"] = "mohammed";

print_r($books);




echo "<br>";
echo "<br>";


// fixit 

$titles = array_column($books, 'title');

sort($titles);

print_r($titles);

echo "<br>";
echo "<br>";
// file 2 task4

$cars = array("Volvo", "BMW", "Toyota");

function convertToUpperCase($item)
{
    return strtoupper($item);
}

$uppercasedcars = array_map('convertToUpperCase', $cars);
print_r($uppercasedcars);

echo "<br>";
echo "<br>";

$numbers = [10, 20, 30, 40, 50, 60, 70];

$filteredNumbers = array_filter($numbers, function ($num) {
    return $num >= 50;
});
print_r($filteredNumbers);

echo "<br>";
echo "<br>";

$sum = array_reduce($numbers, function ($carry, $item) {
    return $carry + $item;
}, 0);
echo "the total is $sum";

echo "<br>";
echo "<br>";

$names = ["Alice", "Bob", "Charlie", "David"];

function addGreeting(&$value, $key, $prefix)
{
    $value = $prefix . ' ' . $value;
}

array_walk($names, 'addGreeting', 'Hello');

print_r($names);

echo "<br>";
echo "<br>";


$array1 = [1, 2, 3, 9, 5];
$array2 = [3, 4, 5, 6, 7];
$deffirant = array_diff($array1, $array2);
print_r($deffirant);


echo "<br>";
echo "<br>";

$intersection = array_intersect($array1, $array2);
print_r($intersection);

echo "<br>";
echo "<br>";

$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];

$combin = array_combine($keys, $values);

print_r($combin);

echo "<br>";
echo "<br>";


$cul = array_column($books, 'title');
print_r($cul);

echo "<br>";
echo "<br>";

$number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Extract a portion of the array using array_slice()
$slice = array_slice($number, 4, 6);

// Print the sliced array
print_r($slice);

echo "<br>";
echo "<br>";

if (in_array(5, $number)) {
    echo "the number  is in the array";
}

