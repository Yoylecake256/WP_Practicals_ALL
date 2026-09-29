<?php
    echo "<h2> Technology Suggestion</h2>";
    $file = fopen("technology.txt", "r");
    while (!feof($file)){
        echo fgets($file), "<br>";
    }
    fclose($file);
?>