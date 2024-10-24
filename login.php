<?php

if (isset($_POST['email']) || isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'stassyzefanya@gmail.com' && $password == 'sisi21'){
        header('Location: ./../dashboard.php');
    }
    else{
        echo "error";
    }
}
?>