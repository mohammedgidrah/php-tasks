<?php
// task 4
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if (isset($_POST['submit']) && !empty($_POST['task'])) {
    $task = htmlspecialchars($_POST['task']);
    array_push($_SESSION['tasks'], $task);
}
$date = date('Y-m-d H:i:s');
foreach ($_SESSION['tasks'] as $index => $task) {
    echo "
     <li>$task <form method='post'>
     <input type='hidden' name='index' value='$index'>
     <input type='submit' name='delete' value='Delete'>
     </form>$date
     </li>";
}

if (isset($_POST['delete'])) {
    $index = $_POST['index'];
    array_splice($_SESSION['tasks'], $index, 0);
}
