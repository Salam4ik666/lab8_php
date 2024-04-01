<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $file = fopen("../comments.txt", "a");
    if ($file) {
        fwrite($file, "Name: $name\nComment: $comment\n\n");
        fclose($file);
        echo "Thank you for your comment!";
    } else {
        echo "Failed to open file for writing.";
    }
} else {
    echo "Form submission method not supported.";
}
