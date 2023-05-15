

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;900&family=Open+Sans&display=swap" rel="stylesheet">
    <script type="text/javascript" src ="../JS/jquery-3.6.4.min.js"></script>

    <title>Document</title>
</head>
<body>

    <div class="navbar">
        <a href="./Home.html"><img src="../Images/logo white.png" class="logo"></a>
        <ul>
            <li><a href="../HTML/login.html">Login</a></li>
            <li><a href="sign-up.html">Sign up</a></li>
            <li><a href="../HTML/about-us.html">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="sign-up-box">
            <div class="content">
                <form name="signupform" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' onsubmit="validateform()">
                    <h2><strong>CREATE ACCOUNT</strong></h2>
                    <input type="text"  name="username" placeholder="Username" class="signup_test" required>
                    <!--<input type="text" name="username" placeholder="Last Name" class="signup_test" required>-->
                    <input type="email" name="email" placeholder="Your email address" class="signup_test" required>
                    <input type="tel"   name="phone" placeholder="Phone Number" class="signup_test" required>
                    <input type="password" id="passfield" name="pass" placeholder="Password" class="signup_test" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <input type="password" id="passconfirm" name="pass" placeholder="Confirm Password" class="signup_test" required><!--<span class="valid"></span>--><span id=passcheck style="float: left; padding-left: 6em; color:red; visibility: hidden;">Password doesnt match</span>
                    <input type="submit"   id="signupbtn" name="sign-up" value="Sign-up" class="login-btn" style='width:75%; border-radius:4px;'>
                </form>
            </div>
                <p style="text-align: center;">Have an account already? <a href="./login.html">Login now</a></p>
                <img src="../Images/logo.png" width="20%" style="margin:15px auto; display:block">
                <p id="exists"></p>
            
            
        </div>

        <div id="message" style="display:none">
            <h3>Password Criteria is as follows:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>uppercase</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>of 8 characters</b></p>
            <p id="special" class="invalid">Has <b>special characters</b></p>
            
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

     <script type=text/javascript src="../JS/validation.js"></script>
     <script>
        function sendexists()
        {
            let x = document.getElementById("exists");
            x.innerHTML.value = "Username already exists";
        }

     </script>
    
</body>
</html>


<?php

    require('db_config.php');


    function isUserExists($db, $uemail)
    {
        //$SQL = "SELECT Email FROM Account WHERE Email = '$uemail'";

        $SQL = "SELECT * FROM Account WHERE Email = '$uemail'";
        
        $results =  mysqli_query($db, $SQL);

        $row = $results->fetch_assoc(); // we fetch results as associative array

        return (is_array($row) && count($row)>0); // we check if it's array and count is more than 0 so this means that a user email already exists
    }
    
    if($_POST)
    {
        if(isset($_POST['sign-up']) && $_POST['sign-up'] == 'Sign-up')
        {
            $user = $_POST['username'];
            $email = $_POST['email'];
            $no = $_POST['phone'];
            $pass = $_POST['pass'];

            
            if(isUserExists($db, $email))
            {
                echo '<script> sendexists(); </script>';
                //echo "<p>This email address is associated with another account please use another email address or login to your account</p>";
                //echo "<script>alert('Email already exists')</script>";
                //header('Location: login.php');
                exit;
            }
            
            $_user = mysqli_real_escape_string($db, $user);
            $_email = mysqli_real_escape_string($db, $email);
            $_no = mysqli_real_escape_string($db, $no);
            $_pass = mysqli_real_escape_string($db, $pass);

            $SQL = "INSERT INTO Account VALUES('$_user', '$_pass', '$_no', '$_email')";
            mysqli_query($db, $SQL);

            header('Location: login.html');
        }
    }
    
?>