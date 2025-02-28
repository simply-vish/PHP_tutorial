<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            $name = "Vishii";
            $age = 22;
            $marriage = false;

            echo $name.' age is '.$age ;
            echo $marriage?' is married' : ' is not married';   //Ternary If
        ?>
    </div>
</body>
</html>