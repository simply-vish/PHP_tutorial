<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Operators</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <h4>Arithmetic Operators</h4>
        <?php 
            $i = 10;
            $j = 20;
            echo '<p>Addition '.$i+$j.'</p>';
            echo '<p>Subtraction '.$i-$j.'</p>';
            echo '<p>Multiplication '.$i*$j.'</p>';
            echo '<p>Division '.$i/$j.'</p>';
            echo '<p>Remainder '.$i%$j.'</p>';
        ?>
        <hr>
        <h4>Assignment Operators</h4>
        <?php 
            $i = 10;
            $j = 20;

            $i += $j; //Add and assign
            $i -= $j;
            $i *= $j;
            $i /= $j;
            $i %= $j;

            $z = 15;
        ?>
        <hr>
        <h4>Comparison Operators</h4>
        <?php 
            $i = 10;
            $j = 20;
            if($i<$j){
                echo "i is less than j";
            }
            //== equal
            //=== identical => checks value & data type
            //!= not equal => <> check value and data type
            //< less than
            //> greater than
            //<= lesser or equal to
            //>= greater or equal to
        ?>
        <hr>
        <h4>Increment & Decrement Operators</h4>
        <?php 
            $i = 100;
            echo 'Post increment';
            echo $i++.'<br>';
            echo 'Pre increment';
            echo ++$i.'<br>';
            echo 'Post decrement';
            echo $i--.'<br>';
            echo 'Pre decrement';
            echo --$i.'<br>';            
        ?>
        <hr>
        <h4>Logical Operators</h4>
        <?php 
            $a = 10;
            $b = 5;
            $var = true;
            //&& and operator
            //|| or operator
            //! not operator

            if($a == 10 && $b == 10){
                echo 'And Statement';
            }
            if($a == 10 || $b == 10){
                echo "OR Statement";
            }
            if(!$var){
                echo "Not Statement";
            }
        ?>
        <hr>
        <h4>String Operators</h4>
        <?php 
            $string1 = " Hello World";
            $string2 = " How are you?";
            echo $string1.$string2;
            echo $string1.=$string2;

        ?>
    </div>
</body>
</html>