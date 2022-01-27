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
    <title>Products</title>
    <link rel="stylesheet" href="css/cvarci.css">
    <link rel="stylesheet" href="css/side-navigation.css">
    <link rel="stylesheet" href="css/products.css">
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
<!---------------------------------------------------SIDE-NAV -->
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

<!----------------------------LISTA TRENUTNO KREIRANIH PROIZVODA-------------------------------->

    <section class="created-products">
        <a  href="create-product.php" class="newProduct-btn">Dodaj proizvod</a> <!------vodi na create-product-->

        <table class="products-table" id="productsTable">
            <tr class="table-column">
                <th class="column-style"></th>
                <th class="column-style">Ime proizvoda</th>
                <th class="column-style">Cijena</th>
                <th class="column-style">Količina</th>
                <th class="column-style"></th> 
                <th class="column-style"></th>
            </tr>
            <?php
                $query = "SELECT * FROM proizvodi;";
                $result = mysqli_query($con, $query);
                $result_check = mysqli_num_rows($result);
                if($result_check > 0)
                {
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr class="column-row">
                <td><img class="product-img" loading="lazy" src="<?= $row['slika'] ?>"></td>
                <td class="row-style"><?php echo $row['ime']?></td>
                <td class="row-style"><?php echo $row['cijena']?></td>
                <td class="row-style"><?php echo $row['kolicina']?></td>
                <td class="row-style">
                     <a  class="product-btn delete-product" href="
                     <?php 
                        echo "/delete.php?id=".$row['id']
                     ?>
                     ">
                     Obriši</a>
                </td> 
                <td class="row-style">
                <a  class="product-btn edit-product" href="
                     <?php 
                        echo "/update.php?id=".$row['id']
                     ?>
                     ">
                     Uredi</a>
                </td> <!---vodi na -->
            </tr>
            <?php
                    }
                }
            ?>
        </table>
    </section>

</body>
</html>
