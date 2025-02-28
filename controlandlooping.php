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
        <h4>If Condition</h4>
        <?php 
            $i=10;
            $j=20;
            if($i<$j){
                echo $i.' is less than '.$j;
            }
        ?>
        <hr>
        <h4>If Else Condition</h4>
        <?php 
            $i=100;
            $j=20;
            if($i<=$j){
                echo $i.' is less than '.$j;
            }
            else{
                echo $j.' is less than '.$i;
            }
        ?>
        <hr>
        <h4>Nested If Else Condition</h4>
        <?php 
            $color = 'blue';
            $item = 'blueberries';
            if($color == 'red'){
                if($item == 'onion'){
                    echo "is a vegetable";
                }
                else if($item == 'apple'){
                    echo "is a fruit";
                }
            }
            else if($color == 'blue'){
                if($item == 'brinjal'){
                    echo 'is a vegetable';
                }
                else{
                    echo 'is a fruit';
                }
            }
        ?>
        <hr>
        <h4>Switch Statement</h4>
        <?php 
            $day = 'Friday';
            switch($day){
                case 'Monday': echo "First Day of the week";
                break;
                case 'tuesday': echo "Second Day of the week";
                break;
                case 'Wednesday': echo "Third Day of the week";
                break;
                case 'Thurday': echo "Fourth Day of the week";
                break;
                case 'Friday': echo "Fifth Day of the week";
                break;
                case 'Saturday': echo "Sixth Day of the week";
                break;
                case 'Sunday': echo "Seventh Day of the week";
                break; 
                default : echo "wrong day passed";
                break;
            }
        ?>
        <hr>
        <h4>While Loop Statement</h4>
        <?php 
            $i = 10;
            while($i <= 15){
                
                echo "Printing i as ".$i;
                $i++;
            }
        ?>
        <hr>
        <h4>Do While Loop Statement</h4>
        <?php 
            $i = 10;
            Do{
                echo "Printing i as ".$i;
                $i++;
            }while($i <= 10)
        ?>
        <hr>
        <h4>For Loop Statement</h4>
        <?php 
            $fruitArr = ['Apple','Banana','Watermelon','Strawberry','Pineapple','Papaya'];
            // for($i=0;$i<count($fruitArr);$i++){
            //     echo $fruitArr[$i]."<br>";
            // }
            // echo "<br>";
            foreach($fruitArr as $fruit){
                echo $fruit."<br>";
            }
        ?>
    </div>
</body>
</html>