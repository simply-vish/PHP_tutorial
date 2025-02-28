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
        <h4>Integer</h4>
        <?php 
            $i=123;
            var_dump($i);
            echo "<br>";
            $j=-1;
            var_dump($j);
            echo "<br>";
            $h= 0x1A;
            var_dump($h);
            echo "<br>";
        ?>
        <hr>
        <h4>Float</h4>
        <?php 
            $i=1.23;
            var_dump($i);
            echo "<br>";
            $j=-9.2e3;
            var_dump($j);
            echo "<br>";
            $h= 3E-9;
            var_dump($h);
            echo "<br>";
        ?>
        <hr>
        <h4>String</h4>
        <?php 
            $i="Hellow World";
            var_dump($i);
            echo "<br>";   
        ?>
        <hr>
        <h4>Boolean</h4>
        <?php 
            $i=false;
            var_dump($i);
            echo "<br>";   
        ?>
        <hr>
        <h4>Arrays</h4>
        <?php 
            $FruitArr=['Apple','Mango','Pine Apple'];
            var_dump($FruitArr);
            echo "<br>";   

            $AgeArr = array(
                'upendra' => 25,
                'Rakesh' => 18,
                'Dennis' => 50
            );
            var_dump($AgeArr);
            echo "<br>";
        ?>
        <hr>
        <h4>Objects</h4>
        <?php 
            class student{
                public $student_name = "Dennis";
                function show_student_name(){
                    return $this->student_name;
                }
            }
            $student = new student;
            var_dump($student);
            echo "<br>";
        ?>
        <hr>
        <h4>Null</h4>
        <?php 
            $var = NULL;
            var_dump($var);
            echo "<br>";
        ?>
        <h4>Resource</h4>
        <?php 
            $fileHandler = fopen("login-url-for-all-page.txt","r");
            var_dump(($fileHandler))
        ?>
    </div>
</body>
</html>