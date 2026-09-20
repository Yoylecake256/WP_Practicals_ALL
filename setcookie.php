<?php
$category = $_POST['category'];
// Create Cookie (Valid for 1 day)
setcookie("technology", $category, time() + 86400);
echo "<h2>Your Preference has been Saved Successfully!</h2>";
echo "<a href='welcome.php'>Visit Portal</a>";
?>