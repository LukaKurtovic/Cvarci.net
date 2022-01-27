<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaša košarica</title>
    <link rel="stylesheet" href="css/cvarci.css">
    <link rel="stylesheet" href="css/side-navigation.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64c722a589.js" crossorigin="anonymous"></script>
    <script src="js/side-nav.js" type="text/javascript" defer></script>
    <script src="js/cart.js" type="text/javascript" defer></script>


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
                    <a  id="index" href="index.php">Početna</a>
                    <a id="products" href="products.php">Proizvodi</a>
                    <a id="orders" href="">Narudžbe</a>
                    <a id="logout" href="logout.php">Odjava</a>
                   
                    
                </div>


            <img src="images/logo.png" alt="Logo" class="menu-logo" aria-label="čvarci.net logo" loading="lazy">
            
           
        </nav>
    </section>
<!---------------------------------------------CART--------------------------------------------------->

    <section class="head-position">
        <h1>Proizvodi iz Vaše košarice</h1>
    </section>

    <section class="created-products">

        <table class="products-table" id="productsTable">
            <tr class="table-column">
                <th class="column-style"></th>
                <th class="column-style">Ime proizvoda</th>
                <th class="column-style">Cijena</th>
                <th class="column-style">Količina</th>
            </tr>
        
        </table>
    </section>

    <section class="cart-info">
        <div class="cart-row">
            <div class="cart-column">
                <h2>Informacije</h2>
                <form id="info-form">
                    <label for="nema">Ime : </label>
                    <input type="text"  id="name"placeholder="Unesite Vaše ime" required>
                    <label for="surname">Prezime : </label>
                    <input type="text" id="surname"placeholder="Unesite Vaše prezime" required>
                    <label for="adress">Adresa dostave : </label>
                    <input type="text" id="adress"placeholder="Unesite adresu dostave" required>
                    <label for="phone-number">Telefonski broj : </label>
                    <input type="number" id="phone-number"placeholder="Unesite broj telefona" required>
                    
                  
                
               
            </div>
            <div class="cart-column">
                <h2>Sažetak narudžbe</h2>
                <p class="total"></p>
                <button class="confirm-btn" type="submit" name="confirm_order">Potvrdi narudžbu</button>
            </div>
            </form>
        </div>
    </section>
</body>
</php>
</body>