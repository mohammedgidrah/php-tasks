<?php
// task 3

if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero error!";
            }
            break;
        default:
            $result = "Invalid operation!";
            break;
    }
}
// task 9

function createCookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, $httponly = "")
{
    $expiry_time = time() + $expiry_time;
    
    if ($httponly) {
        setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, true);
    } else {
        setcookie($cookie_name, $cookie_value, $expiry_time, $cookie_path, $domain, $secure, false);
    }
}

function getAllCookies()
{
    foreach ($_COOKIE as $key => $value) {
        echo "Cookie name: " . htmlspecialchars($key) . " - Cookie value: " . htmlspecialchars($value) . "<br>";
    }
}

function deleteCookie($cookie_name, $cookie_path = "/", $domain = "")
{
    setcookie($cookie_name, "", time() - 86400, $cookie_path, $domain);
}

createCookie("user", "hi", 86400, "/", "",false);

getAllCookies();

deleteCookie("user");









?>






<!DOCTYPE HTML>
<html>

<body>

    <form action="action.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">

    </form>
    <br>
    <br>

    <div class="container">
        <form action="search.php" method="POST">
            <input type="text" name="url" placeholder="Enter URL" required>
            <button type="submit">GO</button>
        </form>
    </div>
    <br>
    <br>

    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <input type="submit" name="submit" value="Calculate">
        <?php
        echo "<br>";
        echo "<br>";
        // echo $result;
        ?>
    </form>
    <div>
        <form method="post">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <input type="submit" name="submit" value="Add Task">
        </form>
        <br>
        <br>
        <br>

        <?php


        session_start();

        // task 4
        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }

        if (isset($_POST['submit']) && !empty($_POST['task'])) {
            $task = htmlspecialchars($_POST['task']);
            array_push($_SESSION['tasks'], $task);
        }

        foreach ($_SESSION['tasks'] as $index => $task) {
            echo "<li>$task <form method='post' >
            <input type='hidden' name='index' value='$index'>
            <input type='submit' name='delete' value='Delete'>
            </form></li>";
        }
        if (isset($_POST['delete'])) {
            $index = $_POST['index'];
            array_splice($_SESSION['tasks'], $index, 1);
        }

        // task 5
        echo "the name of the script file is :" . $_SERVER["SCRIPT_NAME"];
        // task 6
        echo "<p>Page requested at: " . date('Y-m-d H:i:s') . "</p>";

        // task 7
        if (!isset($_SESSION['counter'])) {
            $_SESSION['counter'] = 0;
        }
        $_SESSION['counter']++;
        echo "<p>Page refresh count: " . $_SESSION['counter'] . "</p>";
        // task 8


        $counterFile = 'counter.txt';

        if (!file_exists($counterFile)) {
            file_put_contents($counterFile, '0');
        }

        $counter = file_get_contents($counterFile);

        if (!isset($_SESSION['visited'])) {
            $_SESSION['visited'] = true;
            $counter++;
            file_put_contents($counterFile, $counter);
        }

        echo "<p>Number of visitors: $counter</p>";







        ?>

</body>

</html>