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
            //open and display
            // $file = fopen('login-url-for-all-page.txt',"r") or die('Failed to open the file');
            $file = fopen('trial.txt',"w+") or die('Failed to open the file');
            $fileText = "Hellow\t";
            fwrite($file,$fileText);
            $fileText = "World";
            fwrite($file,$fileText);

            // var_dump($file);
            echo "<br>";
            // echo file_get_contents('login-url-for-all-page.txt');
            // echo fread($file,filesize('trial.txt'));
            fclose($file);
        ?>
    </div>
</body>
</html>