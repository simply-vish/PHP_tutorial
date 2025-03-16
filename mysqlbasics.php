<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | MySQL Basics</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            $server = '127.0.0.1';
            $username = "root";
            $password = "";
            $database = "test";

            $conn_string = mysqli_connect($server,$username,$password,$database);
            if($conn_string==false){
                die("couldn Connect".mysqli_connect_error());
            }

            echo "host information".mysqli_get_host_info($conn_string);
            mysqli_close($conn_string);
        ?>
    </div>
</body>
</html>