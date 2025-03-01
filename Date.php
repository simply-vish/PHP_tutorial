<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Date</title>
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            // echo date("Y-m-d");
            // echo date("h:i:sa");
            $dateString = strtotime("11:00am January 22 2023");
            echo $dateString;
            echo "<br>";
            $completeDate = date('Y m d h:i:sa',$dateString);
            echo $completeDate;
        ?>
    </div>
</body>
</html>