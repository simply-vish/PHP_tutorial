<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Filters</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            $htmlstring = "<b>Hello World</b>";
            echo $htmlstring ."<br>";
            $htmlsanitizedstring = filter_var($htmlstring,FILTER_SANITIZE_STRING);
            echo $htmlsanitizedstring;
            echo "<br>";
            $integer = 10;
            if(filter_var($integer,FILTER_VALIDATE_INT)){
                echo "is a integer<br>";
            }
            else{
                echo "is not a integer<br>";               
            }
            filter_var($integer,FILTER_VALIDATE_IP);
            filter_var($integer,FILTER_SANITIZE_EMAIL);
            filter_var($integer,FILTER_SANITIZE_URL);
            filter_var($integer,FILTER_VALIDATE_URL);
        ?>
    </div>
</body>
</html>