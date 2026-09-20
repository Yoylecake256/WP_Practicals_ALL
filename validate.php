<?php
// Sanitize Name
$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// Get Form Data
$email = $_POST['email'];
$age = $_POST['age'];
$website = $_POST['website'];
$ip = $_POST['ip'];
echo "<h2>Validation Result</h2>";
 
// Display Sanitized Name
echo "<b>Name:</b> $name <br><br>";
 
// Validate Email
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    echo "Email: Valid<br>";
}
else
{
    echo "Email: Invalid<br>";
}
 
// Validate Age
if(filter_var($age, FILTER_VALIDATE_INT))
{
    echo "Age: Valid<br>";
}
else
{
    echo "Age: Invalid<br>";
}
 
// Validate Website
if(filter_var($website, FILTER_VALIDATE_URL))
{
    echo "Website: Valid<br>";
}
else
{
    echo "Website: Invalid<br>";
}
 
// Validate IP Address
if(filter_var($ip, FILTER_VALIDATE_IP))
{
    echo "IP Address: Valid<br>";
}
else
{
    echo "IP Address: Invalid<br>";
}
 
?>