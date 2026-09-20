<!DOCTYPE html>
<html>
<head>
    <title>Emerging Technologies Information Portal</title>
</head>
<body>
<h2>Welcome to Emerging Technologies Information Portal</h2>
 
<?php
if(isset($_COOKIE['technology']))
{
    echo "<h3>Your Preferred Technology Category is: "
          . $_COOKIE['technology'] . "</h3>";
}
else
{
    echo "<h3>No Preference Found.</h3>";
}
 
?>
 
</body>
</html>