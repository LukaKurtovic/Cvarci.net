<?php

    session_start();
    if(isset($_SESSION['email']))
    {
        unset($_SESSION['email']);
    }
    setcookie('email', $user_data['email'], time()-1);
    header("Location:/admin.php");
    die();