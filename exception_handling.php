<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Exception Handling</title>   
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            try{
                echo 10/0;
                //throw new Exception();
            }
            catch(DivisionByZeroError $e){
                echo $e->getMessage().' Error occurred ';
                echo ' on line '.$e->getLine();
            }
            finally{

            }
        ?>
    </div>
</body>
</html>