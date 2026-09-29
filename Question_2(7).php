<?php
    //Associative Array
    $technology = array("Technology Name" => "AI", 
                        "Category" => "Software Technology", 
                        "Year Introduced" => "2023",
                        "Application Area" => "Healthcare",
                        "Developer" => "OpenAI",
                        "Programming Lauguage(s)" => "Python",
                        "Website" => "www.openai.com");
    echo "<h2>Technology Info</h2>";
    ///Display using foreach loop.
    foreach($technology as $key => $value){
        echo "<b>$key: </b> $value <br>";
    }
    echo "<br> Total Categories: " . count($technology);
?>