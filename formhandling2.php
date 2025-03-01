<?php 
    // var_dump($_POST['name']);
    // var_dump($_POST['email']);

    function sanitizeInput($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
    $name = $email = '';
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    echo 'User name is '.$name.' <br>';
    echo 'User Email is '.$email.' <br>';

?>
