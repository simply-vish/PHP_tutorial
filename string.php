<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 101</title>
    
</head>
<body>
 <!-- strlen()
    str_word_count()
    strrev()
    strpos()
    str_replace()  -->
    <p><a href="index1.php">Go back</a></p>
    <div class="container">
        <h4>strlen()</h4>
        <?php 
            $string = "This is a simple sentence for Testing string Functionalities.";
            echo strlen($string);
        ?>
        <h4>str_word_count()</h4>
        <?php 
            $string = "This is a simple sentence for Testing string Functionalities.";
            echo str_word_count($string);
        ?>
        <h4>str_replace()</h4>
        <?php 
            $string = "This is a simple sentence for Testing string Functionalities.";
            echo str_replace('simple','sample',$string);
        ?>
        <h4>strpos()</h4>
        <?php 
            $string = "This is a simple sentence for Testing string Functionalities.";
            echo strpos($string,"sentence");
        ?>
        <h4>strrev()</h4>
        <?php 
            $string = "This is a simple sentence for Testing string Functionalities.";
            echo strrev($string);
        ?>
        <h4>strtoupper()</h4>
        <?php 
            $string = "This is a simple sentence for Testing string Functionalities.";
            echo strtoupper($string);
        ?>
    </div>
</body>
</html>


