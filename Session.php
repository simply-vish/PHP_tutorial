<!-- stores on browser 
 as safe as server-->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Sessions</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            session_start();
            $_SESSION['username']='jupiter@gmail.com';

            echo "Your Username is ".$_SESSION['username'];
            if(isset($_SESSION['username'])){
                unset($_SESSION['username']);
            }
            echo "Your Username is ".$_SESSION['username'];
            session_destroy()
        ?>
        
    </div>
</body>
</html>
