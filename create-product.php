<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kreiraj proizvod</title>
    <link rel="stylesheet" href="css/cvarci.css">
    <link rel="stylesheet" href="css/side-navigation.css">
    <link rel="stylesheet" href="css/create-product.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64c722a589.js" crossorigin="anonymous"></script>
    <script src="js/side-nav.js" type="text/javascript" defer></script>


</head>
<body>
    <section class="header">
        <nav>
            <button class="menu-btn" onclick="showMenu()">
                <i class="fas fa-bars"></i>
            </button>
<!---------------------------------------------------SIDE-NAV ---------------------- -->
                <div class="side-nav" id="sidenav">
                    <div>
                        <img src="images/logo.png" alt="Logo" class="menu-logo nav-menu-logo" aria-label="čvarci.net logo" loading="lazy">
                    </div>
                    <button class="close-btn" type="button" onclick="hideMenu()"></button>
                    <a  id="index" href="dashboard.php">Početna</a>
                    <a id="products" href="products.php">Proizvodi</a>
                    <a id="orders" href="">Narudžbe</a>
                    <a id="logout" href="logout.php">Odjava</a>
                   
                    
                </div>


            <img src="images/logo.png" alt="Logo" class="menu-logo" aria-label="čvarci.net logo" loading="lazy">
            
           
        </nav>
    </section>

</body>
    <section class="create-container">
        <h1>Kreiraj novi proizvod</h1>
        <form action="" method="POST">
            <label class="form-text" for="name">Naziv proizvoda :</label>
            <input class="input-form" type="text" id="product-name" name="product-name"placeholder="Unesite ime proizvoda" required>
            <label class="form-text" for="url">Url slike :</label>
            <input class="input-form" type="text" id="url" name="url" placeholder="Unesite url slike" required>
            <label class="form-text" for="price">Cijena :</label>
            <input class="input-form" type="number" id="price" name="price" placeholder="0" value=""required>
            <label class="form-text" for="amount">Količina :</label>
            <input class="input-form" type="number" id="amount" name="amount" placeholder="0" value="" required>
            <button type="submit" class="submit-product">Spremi proizvod</button>

        </form>
    </section>
</html>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $naziv = $_POST["product-name"];
        $kolicina = $_POST["amount"];
        $cijena = $_POST["price"];
        $url_slike = $_POST["url"];
        $query = "INSERT INTO proizvodi (ime, kolicina, cijena, slika) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $query))
        {
            echo "Something went wrong.";
        }else{
            mysqli_stmt_bind_param($stmt, 'siis', $naziv, $kolicina, $cijena, $url_slike);
            mysqli_stmt_execute($stmt);
            header("Location:/products.php");
        }
    }
?>