<?php
$name = $_POST['name'];
$email = $_POST['email'];
$technology = $_POST['technology'];
$suggestion = $_POST['suggestion'];

$data = "Name: $name\n";
$data .= "Technology: $technology\n";
$data .= "Email: $email\n";
$data .= "Suggestion: $suggestion\n";

$file = fopen("technology.txt", "a");
fwrite($file, $data);
fclose($file);

echo "<h2>Data Saved Successfully!</h2>";
?>