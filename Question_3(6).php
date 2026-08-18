<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Simple Calculator</title> 
</head> 
<body> 
    <h2>Simple Calculator</h2> 
    <form method="post"> 
        Enter First Number: <input type="number" name="num_1" required><br> 
        Enter Second Number: <input type="number" name="num_2" required><br> 
        <input type="submit" value="Calculate"> 
    </form> 

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $num_1 = $_POST['num_1']; 
        $num_2 = $_POST['num_2']; 
        
        echo "<h3>Result</h3>"; 
        echo "Addition: " . ($num_1 + $num_2) . "<br>"; 
        echo "Subtraction: " . ($num_1 - $num_2) . "<br>"; 
        echo "Multiplication: " . ($num_1 * $num_2) . "<br>"; 
        
        if ($num_2 == 0) {
            echo "Division: Cannot divide by zero<br>";
        } else {
            echo "Division: " . ($num_1 / $num_2) . "<br>"; 
        }
    } 
    ?> 
</body> 
</html>
