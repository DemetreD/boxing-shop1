<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoxGear</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <!-- 
    <header class="header container">
        <h1 class="header__title">BOXGEAR</h1>

        <nav class="header__menu">
            <a href="/boxing-shop">Home</a>
            <? //php if (isset($_SESSION['user_name'])): 
            ?>
                <span>Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?></span>
                <a href="/boxing-shop/php/auth/logout.php" class="btn">Logout</a>
            <? //php else: 
            ?>
                <a href="/boxing-shop/php/auth/login.php" class="btn">Login</a>
                <a href="/boxing-shop/php/auth/register.php" class="btn">Register</a>

            <? //php endif; 
            ?>
        </nav>

    </header> -->


    <header class="header container">
        <h1 class="header__title">BoxGear</h1>
        <nav class="header__menu">
            <a class="header__link" href="#home">Home</a>
            <a class="header__link" href="#shop">Shop</a>
            <a class="header__link" href="#categories">Categories</a>
            <a class="header__link" href="#contacts">Contact</a>
        </nav>

        <div class="header__search-box">
            <input type="text" placeholder="Search for boxing gear...">
            <button class="btn"><i class="fas fa-search"></i></button>
        </div>

        <?php if (isset($_SESSION["user_name"])): ?>
            <div class="header__btn-container">
                <span>Welcome, <?= htmlspecialchars($_SESSION["user_name"]) ?></span>
                <a href="logout.php" class="btn">Logout</a>
                <div class="header__cart-icon" onclick="toggleCart()">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </div>
            </div>
        <?php else: ?>
            <div class="header__btn-container">
                <button class="btn" onclick="openModal('login')"><i class="fas fa-user"></i> Login</button>
                <button class="btn" onclick="openModal('register')"><i class="fas fa-user-plus"></i> Register</button>
                <div class="header__cart-icon" onclick="toggleCart()">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </div>
            </div>
        <?php endif; ?>
    </header>
    <main>


</body>

</html>