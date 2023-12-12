<?php  include_once "backend/init.php";?>

<?php
if(isset($_SESSION['logged_in']) && isset($_SESSION['message']) && $_SESSION['logged_in'] === true) {
    echo '<script defer> alert("' . $_SESSION['message'] . '")</script>';
    unset($_SESSION['message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet " href="CSS/home.css">

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
    <!-- A CONTAINER FOR THE WELCOME MESSAGE-->
    <div class="welcome">
        <h1>WELCOME TO ROBE HEADPHONES AND ACCESORIES</h1>
    </div>

    <!-- A CONTAINER FOR MAIN CONTENT-->
    <div class="main-content">
        <h1 class="new-arrivals">NEW <br>ARRIVALS</h1>
        <p> WE'VE GOT YOU COVERED WITH ALL KINDS OF HEADPHONE BRANDS.<br>
            UNLEASH THE POWER OF SUPERIOR AUDIO AND STYLE WITH OUR CUTTING-EDGE<br> HEADPHONES AND ACCESSORIES. EXPLORE OUR COLLECTION AND REDEFINE YOUR<br> SOUND EXPERIENCE. YOUR JOURNEY TO EXCEPTIONAL AUDIO STARTS HERE!🎧<br> #SOUND RESOLUTION #WELCOME TO QUALITY
        </p>
    </div>

    <br><br><br><br>
    <!-- A CONTAINER FOR THE SUB- CONTENT-->
    <div class="sub-content">
        <P>
            IMMERSE YOURSELF IN UNPARALLELED SOUND QUALITY WITH OUR<br> PREMIUUM HEADPHONES.ELEVATE YOUR AUDIO EXPERIENCE.<br>EXPLORE OUR LATEST COLLECTION NOW!.
        </P>

    </div>

    <div class="explore">
        <a href="product.php">EXPLORE NOW</a>
    </div>

    <footer>
        <ul>
            <li> <p><i class="fa-solid fa-headphones"></i> ROBE HEADPHONES AND ACCESORIES &copy; 2023</p> </li>
            <li>LETS GET SOCIAL</li>
            <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook fa-beat"></i></a></li>
            <li><a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-instagram fa-beat"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube fa-beat"></i></a></li>
            <li><a href=""><i class="fa-brands fa-twitter fa-beat"></i></a></li>
        </ul>
    </footer>

</body>
</html>