<?php
    /**
     * Header HTML markup structure.
     *
     * @package ShopFreshSeafood\structure
     * @since   1.0.0
     * @author  Luke Grippa
     * @link    https://www.LukeGrippa.com
     * @license GNU General Public License 2.0+
     */

    namespace ShopFreshSeafood\structure;

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/sass/main.min.css">

    <script src="https://kit.fontawesome.com/f2bd7c51c1.js" crossorigin="anonymous"></script>

    <title>Shop Fresh Seafood</title>
</head>

<body>
    <header>
        <nav class="navbar" >
            <span class="navbar-toggle" id="js-navbar-toggle">
                <i class="fas fa-bars"></i>
            </span>
            <a href="#" class="logo"> <img src="./assets/images/Shop-Fresh-Seafood-Flyer-Title.png" alt=""></a>
            <ul class="nav-list" id="js-nav-list">
                <li><a href="about.php">About Us</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="order.php" class="button">Order Now</a></li>
            </ul>
        </nav>
    </header>
    <script src="./assets/js/navigation.js"></script>
