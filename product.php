<?php  include_once "backend/init.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT PAGE</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
            <link rel="stylesheet" href="CSS/products.css">
</head>
<body>
<header>
    <!-- HEADER LOGO-->
    <div class="logo">
        <h3><i class="fa-solid fa-headphones"></i> ROBE HEADPHONES AND ACCESORIES</h3>
    </div>

    <!--HEADER NAVIGATION  LINKS-->
    <li>
        <ul><a href="./">HOME</a></ul>
        <ul><a href="#">ABOUT</a></ul>
        <ul><a href="#">CONTACT</a></ul>

        <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            echo "<ul>Welcome, " . $_SESSION['name'] . "</ul>";
            echo "<ul><a href='backend/logout.php'>LOGOUT</a></ul>";
        } else {
            echo "<ul><a href='signup.php'>SIGNUP</a></ul>";
        }
        ?>


    </li>
</header>
<!-- CONTAINER FOR WELCOME NOTE AND LOGIN PAGE-->
    <div class="content-cover">
        <h1>WELCOME TO ROBE HEADPHONES AND ACCESORIES</h1>
        <div class="login-signup">
            <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    echo "<a style='margin-left:-125px' href='backend/logout.php'>LOGOUT</a>";
                } else {
                    echo "<a href='login.php'>LOGIN</a>";
                    echo "<a href='signup.php'>SIGN UP</a>";
                }
            ?>
            <!--<a href="login.php">LOGIN</a>
            <a href="signup.php">SIGN UP</a>-->

        </div>
        

    </div>
    <br>
    <hr>
    <h3 class="glance">GLANCE THROUGH OUR PRODUCTS</h3>
<!-- A CONTAINER FOR THE PRODUCTS-->
    <div class="products">
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone1.jpg" alt="headphone1" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone2.jpg" alt="headphone2" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>

        </div>
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone3.jpg" alt="headphone3" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone4.jpg" alt="headphone4" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone5.jpg" alt="headphone5" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone6.jpg" alt="headphone6" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone8.jpg" alt="headphone8" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone9.jpg" alt="headphone9" class="images"></a>
            <p>HEADPHONE 1</p>
            <p><del>GHC 100.00</del></p>
            <p>GHC 8O.00</p>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone10.jpg" alt="headphone10" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>
        
        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone11.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone7.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/headphone12.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc4.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc3.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc2.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc1.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc5.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc6.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc7.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc8.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc9.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc10.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc11.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc12.jpg" alt="headphone12" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc13.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc14.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc15.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>

        <div class="prices">
            <a href="product-details.html"><img src="IMAGES/acc16.jpg" alt="headphone11" class="images"></a>
        <p>HEADPHONE 1</p>
        <p><del>GHC 100.00</del></p>
        <p>GHC 8O.00</p>
        <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
            <i class="fa-solid fa-star fa-spin fa-spin-reverse"></i>
        </div>
    </div>
        <br><br>
       <hr>
<!--FOOTER-->
    <footer>
        <ul>
            <li> <p><i class="fa-solid fa-headphones" style="color: #000000;"></i> ROBE HEADPHONES AND ACCESORIES &copy; 2023</p> </li>
            <li>LETS GET SOCIAL</li>
            <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook fa-beat"></i></a></li>
            <li><a href="https://www.instagram.com/accounts/login/"><i class="fa-brands fa-instagram fa-beat"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-beat"></i></a></li>
            <li><a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter fa-beat"></i></a></li>
        </ul>
    </footer>

</body>
</html>