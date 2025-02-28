<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101 | Classes and Objects</title>
    
</head>
<body>
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <?php 
            class Blueprint{
                public $length = 0;
                public $width = 0;
                public $paint = 0;
                public $noOfDoors = 0;
                public $noOfWindows = 0;

                // public function __construct(){

                // }

                public function getBuiltUpArea(){
                    return ($this->length * $this->width);
                }

                public function totalDoors(){
                    return $this->noOfDoors;
                }

                public function totalWindows(){
                    return $this->noOfWindows;
                }

                public function paint(){
                    return $this->paint;
                }

                // public function __destruct(){

                // }
            }
            $house1 = new Blueprint;
            $house1->length = 30;
            $house1->width = 40;
            $house1->paint = 'Burgundy';
            $house1->noOfDoors = 2;
            $house1->noOfWindows = 4;

            echo "Build Up Area for House 1 ".$house1->getBuiltUpArea();
            echo "<br>Total Doors for House 1 ".$house1->totalDoors();
            echo "<br>Total Windows for House 1 ".$house1->totalWindows();
            echo "<br>Paint Job for House 1 ".$house1->paint();

            $house2 = new Blueprint;
            $house2->length = 40;
            $house2->width = 40;
            $house2->paint = 'Aqua Marine Blue';
            $house2->noOfDoors = 3;
            $house2->noOfWindows = 5;

            echo "<hr><br>Build Up Area for House 2 ".$house2->getBuiltUpArea();
            echo "<br>Total Doors for House 2 ".$house2->totalDoors();
            echo "<br>Total Windows for House 2 ".$house2->totalWindows();
            echo "<br>Paint Job for House 2 ".$house2->paint();

            echo "<hr>";
            class Student{
                public $name;
                protected $usn;
                private $number;
            }
            class IndividualStudent extends Student{
                public function __construct(){
                    echo "<br>we have created ".__CLASS__." and initialized it<br>";
                }
            }

            $originalClass = new Student;
            $originalClass->name="whatever";
            // $originalClass->usn= 1234;
            // $originalClass->number = 92738276381;

            $inheritedClass = new IndividualStudent;
            $inheritedClass->name="hehe";
            // $inheritedClass->usn= 34;
            $inheritedClass->number = 9838776381;
        ?>
    </div>
</body>
</html>