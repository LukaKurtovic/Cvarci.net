<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login_index($con);
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['pwd'];

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
        

        if($result)
        {
            if($result  && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === md5($password))
                {
                    $_SESSION['email'] = $user_data['email'];
                    setcookie('email', $user_data['email'], time()+86400);
                    header("Location:/dashboard.php");
                    die();
                }
            }
        }
        echo "Email ili lozinka netocni";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>čvarci.NET</title>
    <link rel="stylesheet" href="css/cvarci.css">
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64c722a589.js" crossorigin="anonymous"></script>



</head>
<body>
    <section class="header">
        <nav>
            <a href="/index.php">
                <img src="images/logo.png" alt="Logo" class="menu-logo" aria-label="čvarci.net logo" loading="lazy">
            </a>
        </nav>
    </section>

<!------------------------------------LOGIN----------------------------------->
<div class="login-container">
    <h2>Prijavi se</h2>
    <form class="login-form" method = "post">
    
            <label for="email">Email</label>
            <input type="email" name="email" id="email"placeholder="Unesite Vaš email" required >
            <label for="password">Lozinka</label>
            <input type="password" name="pwd" id="password"placeholder="Unesite Vašu lozinku" required>
            <button type="submit" name="submit" class="login-btn">PRIJAVI SE</button>
    </form>
    

</div>


</body>
</html>