<?php
// task 3

// if (isset($_POST['submit'])) {
//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];
//     $operation = $_POST['operation'];
//     $result = 0;

//     switch ($operation) {
//         case "add":
//             $result = $num1 + $num2;
//             break;
//         case "subtract":
//             $result = $num1 - $num2;
//             break;
//         case "multiply":
//             $result = $num1 * $num2;
//             break;
//         case "divide":
//             if ($num2 != 0) {
//                 $result = $num1 / $num2;
//             } else {
//                 $result = "Division by zero error!";
//             }
//             break;
//         default:
//             $result = "Invalid operation!";
//             break;
//     }

// }



?>






<!DOCTYPE HTML>
<html>
<body>

    <form action="action.php" method="post">
        Name: <input type="text"  name="name" ><br>
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
        <form action="todolist.php"  method="post">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <input type="submit" name="submit" value="Add Task">
        </form>

</body>

</html>


