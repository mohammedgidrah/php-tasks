<?php














// echo "<h1> Multidimensional arrays</h1>";
// $cars1 = array(
//     array("Volvo", 22, 18),
//     array("bmw", "boz tiger", "2020"),

// );

// echo $cars1[0][0] . ": In stock: " . $cars1[0][1] . ", sold: " . $cars1[0][2] . ".<br>";
// echo $cars1[1][0] . ": model: " . $cars1[1][1] . ", year: " . $cars1[1][2] . ".<br>";


// $cars2 = array(
//     array(
//         array("toyota","camry",2017)
//     ),

// );
// echo "<h1>three dimensional arrays</h1>";

// echo $cars2[0][0][0] . ": model: " . $cars2[0][0][1] . ", year: " . $cars2[0][0][2] . ".<br>";



// f1 task1

$fruits = array("kiwi", "pear", "grape", "chary", "apple");

foreach ($fruits as $item) {
    echo $item . "\n";
}
echo "<br>";
echo "<br>";
array_push($fruits, "pinaplle");
print_r($fruits);
echo "<br>";
echo "<br>";

array_pop($fruits);
print_r($fruits);

echo "<br>";
echo "<br>";

if (in_array("pear", $fruits)) {
    echo "pear is in fruits";
}

echo "<br>";
echo "<br>";
// f1 task2

$persone = array("ahmad" => 20, "mohammed" => 19, "abdallah" => 13, "zaid" => 25, "abood" => 24);
print_r($persone);

echo "<br>";
echo "<br>";

$persone += ["atallah" => 55];
print_r($persone);

echo "<br>";
echo "<br>";

unset($persone["ahmad"]);
print_r($persone);

echo "<br>";
echo "<br>";

if (array_key_exists("mohammed", $persone)) {
    echo "mohammed exists!";
}
echo "<br>";
echo "<br>";

// f1 task3

$persone2 = array(
    array("mohammed", 20, 90),
    array("ahmad", 25, 70),
    array("abood", 15, 80),
);
foreach ($persone2 as $x) {
    foreach ($x as $y) {
        echo ($y . "\n");
    }
    echo "<br>";
}


echo "<br>";

array_push($persone2, ["atallah", 59, 75]);
print_r($persone2);

echo "<br>";
echo "<br>";
$persone2[0][2] = 100;
print_r($persone2);

echo "<br>";
echo "<br>";

array_pop($persone2);
print_r($persone2);

echo "<br>";
echo "<br>";

// f1 task4

$cars = array("Volvo", "BMW", "Toyota");


array_push($cars, "marcedes");
print_r($cars);


echo "<br>";
echo "<br>";

array_pop($cars);
print_r($cars);

echo "<br>";
echo "<br>";


$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
print_r(array_keys($car));
echo "<br>";
echo "<br>";

print_r(array_values($car));

echo "<br>";
echo "<br>";

echo count($car);

echo "<br>";
echo "<br>";
$arr1 = array("mohammed", "ahmad");
$arr2 = array("abdallah", "atallah");

print_r(array_merge($arr1, $arr2));

echo "<br>";
echo "<br>";

echo (array_search("Ford", $car));

echo "<br>";
echo "<br>";

$arr3 = array(1, 5, 9, 2, 7, 3, 4, 6, 8, 10);

sort($arr3);
$arrlength = count($arr3);
for ($x = 0; $x < $arrlength; $x++) {
    echo $arr3[$x];
    echo "<br>";
}
echo "<br>";
echo "<br>";


$age = array(6 => 25, 2=> 12, 9 => 59, 4 => 56);
ksort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<br>";
echo "<br>";

$age2 = array("ahmad" => 25, "mohammed"=> 12, "abdallah"=> 59, "atallah" => 56);
asort($age2,1);
foreach ($age2 as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
