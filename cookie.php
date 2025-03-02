<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Cookies</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            $cookieName = 'username';
            $cookieValue = 'jordanturpine@gmail.com';
            $cookieLifetime = time()+1*60;
            // 30 Days * 24 Hours * 60 mins * 60 secs -> 30 Days
            //24 gours * 60 mins * 60 secs -> 1 day
            // 60 mins * 60 secs -> 1 hour
            // 60 secs -> 1 min

            setcookie($cookieName,$cookieValue,$cookieLifetime);

            echo isset($_COOKIE[$cookieName])?$_COOKIE[$cookieName]:'Cookie has been closed';

            setcookie($cookieName,"",time()-3600);
        ?>
    </div>
</body>
</html>