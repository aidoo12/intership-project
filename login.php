<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A SIMPLE LOGIN PAGE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet " href="CSS/style.css">
    <!--<link rel="stylesheet" href="form.js">-->
    <script src="form.js"></script>
</head>
<body>
<header>
    <!-- HEADER LOGO-->
    <div class="logo">
        <h3> <i class="fa-solid fa-headphones"></i>ROBE HEADPHONES AND ACCESSORIES</h3>
    </div>

    <!--HEADER NAVIGATION  LINKS-->
    <li>
        <ul><a href="index.html">HOME</a></ul>
        <ul><a href="product.html">PRODUCTS</a></ul>
        <ul><a href="#">CONTACT</a></ul>
    </li>
</header>
   <div class="form">
    <h2>Sign in</h2>
    <p>Stay updated on your professional world</p>
    <form>
        <!--INPUT TYPE FOR NAME-->
        <input type="text" name="name" id="name" placeholder="  Enter full-name" required="required" class="field">

        <!-- INPUT TYPE FOR EMIAL-->
        <input type="email " name="email" id="email" placeholder="  Email or Phone" required="required" class="field">

        <!--INPUT TYPE FOR PASSWORD-->
        <input type="password" name="password" id="password" placeholder=" Enter password" required="required" class="field"><br>
        
        <a href="#" class="forget-password">forget password?</a> <br><br>

        <div class="sign-in-container">
            <button class="sign-in" type="button" onclick="validateForm()"><a href="#">Sign in</a></button>
        </div>

        
        <p>
            by clicking continue,you agree to likedin's<span class="user-aggrement">User Aggrement</span>,<span class="user-aggrement">Privacy Policy</span> and<span class="user-aggrement">Cookie policy</span> .
        </p>

        <!-- NAVIGATION LINKS TO SIGN IN  WITH GOOGLE, APPLE OR WITH A ONE-TIME LINK  -->
       <div>
        <button class="signin-links"><a href="https://accounts.google.com/"> <i class="fa-brands fa-google fa-beat fa-sm"></i> Continue with Google</a></button>
        <button class="signin-links"> <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook fa-beat fa-sm"></i> Continue with facebook</a></button>
        <button class="signin-links"> <a href="https://www.linkedin.com/login"><i class="fa-solid fa-link fa-beat"></i> Continue with link</a></button>

       </div>
        <p class="text-center"><a class="sign-up-link" href="signup.php">Sign Up</a></p>
    </form>
    </div>

     <div class="new">
        <p>New to Robe Headphones and accesories? <a href="#">Join now</a></p>
     </div>

   <!--FOOTER-->
    
    <footer>
        <div>
            <p class="linkedin"><i class="fa-solid fa-headphones" style="color: #000000;"></i> ROBE HEADPHONES AND ACCESORIES &copy; 2023</p>
            <ul>
                <li><a href="#">User Aggrement</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Community Guidelines</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Copyright Policy</a></li>
                <li><a href="#">Send Feedback</a></li>

            </ul>
            <p>Language</p>
            <select>
                <option>English</option>
                <option>French</option>
                <option>Spanish</option>
                <option>Dutch</option>
            </select>
           
        </div>
        
    </footer>
</body>
</html>