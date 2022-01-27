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
    <title>čvarci.NET</title>
    <link rel="stylesheet" href="css/cvarci.css">
    <link rel="stylesheet" href="css/side-navigation.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64c722a589.js" crossorigin="anonymous"></script>
    <script src="js/market.js" async></script>
    <script src="js/side-nav.js" type="text/javascript" defer></script>


</head>
<body>
<!--------------- HEADER -------------------------------------------------------------------->
    <section class="header">
        <nav>
            <button class="menu-btn" >
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </button>
            <!---------------------------------------------------SIDE-NAV ---------------------- -->
            <div class="side-nav" id="sidenav">
                <div>
                    <img src="images/logo.png" alt="Logo" class="menu-logo nav-menu-logo" aria-label="čvarci.net logo" loading="lazy">
                </div>
                <button class="close-btn" type="button" onclick="hideMenu()"></button>
                <a  id="index" href="/dashboard.php">Početna</a>
                <a id="products" href="/products.php">Proizvodi</a>
                <a id="orders" href="">Narudžbe</a>
                <a id="logout" href="/logout.php">Odjava</a>
               
                
            </div>


            <img src="images/logo.png" alt="Logo" class="menu-logo" aria-label="čvarci.net logo" loading="lazy">
                
                
            <a class="button-nav-style"id="cart-button" type="button">
                 <i class="fas fa-shopping-cart fa-lg"  ></i><span id="total_counter">0</span>
            </a>            
                
            
        </nav>
    </section>
<!--------------------CART ---------------------------------------------->
    <div class="container">
        <h2>Moja košarica</h2>
        <div class=" cart">
            <div class="products">
            </div>
        </div> 
        <a href="/cart.php" class="btn-submit" aria-label="Kupi sada">Kupi sada</a>
        
    </div>




<!--------------------FIRST ROW WITH H1 AND IMG---------------------------------------------->


   <section class="start-content">
        <div class="row">
            <div class="flex-center flex-column">
                <h1>Najbolji čvarci na kućnom pragu</h1>
                <a href="" class="start-btn" type="button"><b>DOSTAVA</b><br>Naruči</a>
                <a href="" class="start-btn" type="button"><b>PREUZMI</b><br>Na čvarkomatu</a>

            </div>
            <div class="flex-center flex-column">
                <img src="images/Banner photo.png" class="main-photo"alt="Logo-img" aria-label="Čvarci slika" loading="lazy">
            </div>
            
        </div>

   </section>
<!------------------------------SECOND ROW - CONTENT-------------------------------->
   <section class="content">
    <div class="row-second">
            <div>
                <img src="images/icon-1.png" alt="Icon-1" aria-label="Ikona sata" loading="lazy">
                <p>dostavljamo čvarke za manje od 30 minuta</p>
            </div>
            <div>
                <img src="images/icon-2.png" alt="Icon-2" aria-label="Ikona tomosa" loading="lazy">
                <p>naši šoferi voze tomose</p>
            </div>
            <div>
                <img src="images/icon-3.png" alt="Icon-3" aria-label="Ikona Francuske" loading="lazy">
                <p>nabavljamo najbolje prasce iz Francuske</p>
            </div>
        
    </div>

   </section>
 <!-----------------------------------------BUY ONLINE-------------------------------------------------->
    <section class="block-buy-online">
        <h2>Novo u ponudi ! naručite čvarke online</h2>
        <div class="row">
        <?php
                $query = "SELECT * FROM proizvodi;";
                $result = mysqli_query($con, $query);
                $result_check = mysqli_num_rows($result);
                if($result_check > 0)
                {
                    while($row = mysqli_fetch_assoc($result)){
            ?>
        <div class="row">
            <div class="buy-column">
                <img src="<?= $row['slika'] ?>" class="cvarci-picture"alt="Slika čvaraka" aria-label="Slika čvaraka" loading="lazy">
                <h3 class="naziv-proizvoda"><?php echo $row['ime']?></h3>
                <p class="cijena_kg"><span class="cijena"><?php echo $row['cijena']?></span> kn/kg</p>
                <form>
                    <p class="p_kolicina">Količina:</p>
                    <input type="number" id="suma" class="suma" value="1"> 
                </form>
                <button class="add-button" type="button">Stavi u košaricu</button>
            </div>
            <?php
                    }
                }
            ?>
        </div>
        
    </section>
<!------------------------------THIRD ROW - FOOD images-------------------------------->
    <section class="images-row">
        <div class="row">
            <h2>Naše čvarke možete pronaći</h2>
            <a href="" class="all-btn" type="button" aria-label="Prikaži sve">prikaži sve</a>
        </div>
        <div class="row">
                <button class="btn-left"><i class="fas fa-arrow-left "></i></button>
                <img class="food-images"src="images/photo-1.png" alt="Slika čvaraka" aria-label="Slika hrane" loading="lazy" >
                <img class="food-images"src="images/photo-2.png" alt="Slika hrane" aria-label="Slika hrane" loading="lazy" >
                <img class="food-images"src="images/photo-3.png" alt="Slika salate" aria-label="Slika hrane" loading="lazy" >
                <img class="food-images"src="images/photo4.png" alt="Slika hrane" aria-label="Slika hrane" loading="lazy" >
                <button class="btn-right"><i class="fas fa-arrow-right "></i></button>

               
        </div>

    </section>
<!-----------------------------PARTNERS ---------------------------------------------------->
    <section class="partners">
        <div class="row-partner">
            <div class="partners-column">
                <h2>Želite biti naš brand partner?</h2>
                <p>Pošaljite nam Vaš broj i kontaktirat ćemo Vas u najkraćem mogućem roku</p>

            </div>
            <div class="flex-center flex-column" >
                <form>
                    <input type="text" name="email" id="email" aria-label="unos-email" placeholder="Pošaljite Vašu email andresu">
                    <button type="submit" class="posalji-btn">pošalji</button>

                </form>
            </div>
        </div>

    </section>
<!-----------------------------LOCATION ---------------------------------------------------->
    <section class="location">
        <div class="row">
            <h2>Gdje se nalaze naši čvarkomati?</h2>
            <img class="map-img"src="images/map.png" alt="Map" aria-label="Mapa s lokacijama čvarkomata" loading=lazy>
        </div>

    </section>
<!-------------------------------CIRCLES-------------------------------------------------->
    <section class="circles">
        <div class="row-circle">
            <div class="circle-column">
                <img  class="circle-img" src="images/Jedan.png" alt="Circle" aria-label="Krug s brojem" loading="lazy">
                <h3>klaonica</h3>
            </div>
            <div class="circle-column">
                <img class="circle-img" src="images/sest.png" alt="Circle" aria-label="Krug s brojem" loading="lazy">
                <h3>vrsta čvaraka</h3>
            </div>
            <div class="circle-column">
                <img class="circle-img" src="images/jedanaest.png" alt="Circle" aria-label="Krug s brojem" loading="lazy">
                <h3>restorana</h3>
            </div>
            <div class="circle-column">
                <img class="circle-img" src="images/Jedan.png" alt="Circle" aria-label="Krug s brojem" loading="lazy">
                <h3>najbolja cijena</h3>
            </div>

        </div>

    </section>

<!---------------------------------------INSTAGRAM PICTURES--------------------------------------------------------->
    <section class="instagram">
        <h2>#čvarcinet <span>na instagramu</span></h2>
        <div class="row">
            <img src="images/instagram-1.png" class="food-images" alt="instagram slika"aria-label="Slika s instagrama" loading="lazy">
            <img src="images/instagram-2.png" class="food-images"alt="instagram slika"aria-label="Slika s instagrama" loading="lazy">
            <img src="images/instagram-3.png" class="food-images" alt="instagram slika"aria-label="Slika s instagrama" loading="lazy">
            <img src="images/instagram-4.png" class="food-images" alt="instagram slika"aria-label="Slika s instagrama" loading="lazy">
        </div>
    </section>

<!--------------------------------------------FOOTER----------------------------------------------------------------->
<section class="footer">
    <!---------------------------------------INFORMATIONS--------------------------------------------------------->
    <div class="informations">
        <img src="images/logo.png"  class="menu-logo"alt="Logo image" aria-label="Logo-cvarci.net" loading="lazy">
    
        <ul>
            <li><a href="" aria-label="O nama">O nama</a></li>
            <li><a href="" aria-label="Cijenik">Cijenik</a></li>
            <li><a href="" aria-label="Kontakt">Kontakt</a></li>
        </ul>
    </div>
<!------------------------------------------FOOTER-------------------------------------------------------------------->
<hr>
    <div class="contact">
        <div class="icons">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook"></i>
            
        </div>
        <ul>
            <li><a href="" aria-label="Polica privatnosti">Polica privatnosti</a></li>
            <li><a href="" aria-label="Uvjeti korištenja">Uvjeti korištenja</a></li>
            <li>© 2021 čvarci.net</li>

        </ul>

    </div>
</section>



</body>
</html>