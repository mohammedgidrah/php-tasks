<?php
// task 1
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    if (empty($email)) {
        echo "email is empty";
    } else {
        echo $email;
    }
}
?>

