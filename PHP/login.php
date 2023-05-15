<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;900&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar">
        <a href="./Home.html"><img src="../Images/logo white.png" class="logo"></a>
        <ul>
            <li><a href="login.html">Login</a></li>
            <li><a href="sign-up.html">Sign up</a></li>
            <li><a href="about-us.html">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
    <!--<a href="./Home.html"><img src="../Images/resized-logo.png" id="tops" alt="variant store logo"> </a>-->
    <div class="container">
        <div class="box_model">
            <h2 id="login-top">LOGIN</h2>
            <div class="content">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" id="username" class="login_inputs" placeholder="Username" required>
            </div>
            <div class="content">
                <i class="fa-solid fa-lock"></i>
                <!--<label for ="password"> Password --><input type="password" name="password" id="password" class="login_inputs" placeholder="Password" required>
            </div>
            <input type="checkbox"><label> Remember Me</label>
            <a href="forgot-pass.html" class="pass_forgot">Forgot password?</a>
    
            <div class="content">
                <input type="submit" class="login-btn" value="Login">
            </div>
            <p style="text-align:center;">Don't have an account? <a href="sign-up.html">Sign up now!</a></p>
            <img src="../Images/logo.png" width="20%" style="margin:15px auto; display:block">
        </div>
    </div>

    <footer>
        <div class="footer_container">
             <div class="footer_section">
                 <img src="../Images/logo white.png" class="footer_logo">
                 <p class="desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>Obcaecati sit fuga quam eaque minus aperiam suscipit id <br>magni at odio saepe officiis, nesciunt, cum nobis dolor<br> iusto nisi aliquam aliquid!</p>
                 <a href = "facebook.com"><i class="fa-brands fa-facebook"></i></a>
                 <a href = "facebook.com"><i class="fa-brands fa-instagram"></i></a>
                 <a href = "facebook.com"><i class="fa-brands fa-twitter"></i></a>
                 <a href = "facebook.com"><i class="fa-brands fa-snapchat"></i></a>
 
             </div>
             <div class="footer_section">
                 <h3>Help</h3>
                 <a href="#"><p>FAQ</p></a>
                 <a href="#"><p>Return Policy</p></a>
                 <a href="#"><p>Track Order</p></a>
                 <a href="#"><p>Payement Options</p></a>
 
             </div>
 
             <div class="footer_section">
                 <h3>Quick Links</h3>
                 <a href="Home.html"><p>Home</p></a>
                 <a href="login.html"><p>Login</p></a>
                 <a href="sign-up.html"><p>Sign up</p></a>
                 <a href="about-us.html"><p>About us</p></a>
                 <a href="#"><p>Contact</p></a>
             </div>
 
             <div class="footer_section">
                 <h3>Address</h3>
                 <p>6 of october Al Motmayez,
                 <br>Giza Governorate 
                 <br>Egypt</p>
             </div>
        </div>
        <p style="text-align: center; color:white; font-size:15px">MSA loves you.</p>
     </footer>
</body>
</html>