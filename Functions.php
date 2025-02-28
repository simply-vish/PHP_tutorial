<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Functions</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            //parameter and return 
            function divide($a,$b){
                $c = '';
                try{
                    $c=$a/$b;
                }catch(DivisionByZeroError $e){
                    echo "Exception Occurred Exceptions is ".$e->getMessage()." on Line ".$e->getLine()." on File ".$e->getFile();
                }
                return $c;
            }
            echo divide(10,0);

            //parameter and no return
            function sum($a,$b){
                echo $a+$b;
            }
            sum(100,300);
            echo "<br>";

            //no parameter and return
            function greetings(){
                return "How are you";
            }
            echo greetings();
            echo "<br>";

            //no parameter and no return
            function helloworld(){
                echo "how you doing";
            }

            helloworld();
        ?>
    </div>
</body>
</html>