<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | JSON Parsing</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            // {
            //     "fruits": [
            //         "apple",
            //         "papaya",
            //         "orange"
            //     ]
            // }
            $fruits = array("apple","papaya","orange");
            var_dump($fruits);
            echo "<br>";
            $fruitsJson = json_encode($fruits);
            $fruitsJson = json_encode($fruits);
            // echo $fruitsJson;
            var_dump($fruitsJson);

            $jsonString = '{"name":"Dennis","age":40,"education":"Btech"}';
            echo $jsonString;

            $convertedJsonString = json_decode($jsonString);
            var_dump($convertedJsonString);
        ?>
    </div>
</body>
</html>