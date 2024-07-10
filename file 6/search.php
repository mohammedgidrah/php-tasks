<?php
// task 2

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);//This filter allows all letters, digits and $-_.+!*'(),{}|\\^~[]`"><#%;/?:@&=
    if (filter_var($url)) {
        header("Location: $url");
        exit();
    } 
}

?>



