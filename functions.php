<?php

function check_login($con)
{
   
    if(isset($_SESSION['email']) or isset($_COOKIE['email']))
    {
       
        $email = $_SESSION['email'];
        $query = "select * from korisnici where email = ? limit 1";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            echo "Something went wrong.";
        }else{
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        }
        
        if($result  && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    header("Location:/admin.php");
    die();
}

function check_login_index($con)
{
   
    if(isset($_SESSION['email']) or isset($_COOKIE['email']))
    {
        $_SESSION['email'] = $_COOKIE['email'];
        $email = $_SESSION['email'];
        $query = "select * from korisnici where email = ? limit 1";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            echo "Something went wrong.";
        }else{
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
        }
        
        if($result  && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            header("Location:/dashboard.php");
            return $user_data;
        }
    }
}