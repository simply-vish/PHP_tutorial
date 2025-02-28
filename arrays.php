<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Arrays</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            $array = [];
            echo var_dump($array);
            echo "<br>";
            // 2nd way
            $array1 = array();
            echo var_dump($array1);
            echo "<br>";
            //with val //associative arr
            $array2 = ['Dog','Cat','Cow'];
            echo var_dump($array2);
            echo "<br>";
            
            $array3 = array('Dog1','Cat1','Cow1');
            echo var_dump($array3);
            echo "<br>";
             
            //access
            count($array2);
            //echo 'Index 1 '.$array2[0].' Index 2 ',$array2[1].' Index 3 ',$array2[2];
            for($i=0;$i<count($array2);$i++){
                echo $array2[$i].'<br>';
            }

            //Associative Arrays
            $arr = ['sidh'=>'25','kav'=>'88','tins'=>'99'];
            //echo 'Index 1 '.$arr['sidh'].' Index 2 '.$arr['kav'].' Index 3 '.$arr['tins'];

            foreach($arr as $key=>$value){
                echo 'for '.$key.' age is '.$value.'<br>';
            }

            //Multi dimension array
            for($i=0;$i<10;$i++){
                for($j=0;$j<$i;$j++){
                    echo '*';
                }
                echo '<br>';
            }
        ?>
    </div>
</body>
</html>