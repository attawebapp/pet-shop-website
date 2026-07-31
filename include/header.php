<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
    <header class="header">
        <div class="top_header">
            <div class="container">
                <div class="top_bar">
                    <div class="top_contact">
                        <a href="tel:1234567890"><i class='bx bxs-phone-call' ></i> Call Us On: (123) 456-7890</a>
                        <a href="mailto:Info@Demolink.com"><i class="bx bx-envelope" aria-hidden="true"></i>
                        Email: Info@Demolink.com</a>
                    </div>
                    <div class="myaccount">
                        <select name="lang" id="">
                            <option value="1" disabled selected>my account</option>
                            <option value="2">my account</option>
                        </select>
                        <select name="lang" id="">
                            <option value="1" disabled selected>english</option>
                            <option value="2">english</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-main">
                <a href="index.php" class="header__logo">
                    <img src="assets/images/logo.png" alt="Logo" class="imgFluid" />
                </a>
                <ul class="header-main__nav">
                    <li><a href="index.php"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "index.php") !== false ? "active" : ""); ?>">home</a>
                    </li>
                    <li><a href="about.php"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "about.php") !== false ? "active" : ""); ?>">about</a>
                    </li>
                    <li><a href="product.php"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "product.php") !== false ? "active" : ""); ?>">Products</a>
                    </li>
                    <li><a href="gallery.php"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "gallery.php") !== false ? "active" : ""); ?>">Gallery</a>
                    </li>
                    <li><a href="blog.php"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "blog.php") !== false ? "active" : ""); ?>">Blog</a>
                    </li>
                    <li><a href="contact.php"
                            class="<?php echo (strpos($_SERVER['PHP_SELF'], "contact.php") !== false ? "active" : ""); ?>">contact
                            Us</a></li>
                </ul>
                <div class="header_btn">
                    <a href="javascript:;" class="shop" id="search_open"><i class="search bx bx-search"></i> search</a>
                    <a href="cart.php" class="shop"><i class='bx bx-cart' ></i> cart</a>
                    <a href="login.php" class="themebtn">log in <i class='bx bx-chevron-right'></i></a>
                </div>
            </div>
        </div>
    </header>

    <div class="search_bar">
        <form action="">
            <input type="text" placeholder="Search Here">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
        <a href="javascript:;" class="search_close"><i class='bx bx-x'></i></a>
    </div>
  