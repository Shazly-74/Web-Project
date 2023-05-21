
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
    <?php include 'navbar.php'?>

    <!--<a href="./Home.html"><img src="../Images/resized-logo.png" id="tops" alt="variant store logo"> </a>-->

    <div class="container">
        <div class="box_model">
        <?php 
            if(!isset($_SESSION['is_logged']))
            {
                echo '<form name="loginform" method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
                echo '<h2 id="login-top">LOGIN</h2>';
                echo '<div class="content">';
                echo '<i class="fa-solid fa-user"></i>';
                echo '<input type="text" name="username" id="username" class="login_inputs" placeholder="Email" required>';
                echo '</div>';
                echo '<div class="content">';
                echo '<i class="fa-solid fa-lock"></i>';
                echo '<input type="password" name="password" id="password" class="login_inputs" placeholder="Password" required>';
                echo '</div>';
                echo '<input type="checkbox"><label> Remember Me</label>';
                echo '<a href="forgot-pass.php" class="pass_forgot">Forgot password?</a>';
                echo '<div class="content">';
                echo '<input type="submit" class="login-btn" name="login" value="Login">';
                echo '</div>';
                echo '</form>';
                echo '<p style="text-align:center;">Don\'t have an account? <a href="sign-up.php">Sign up now!</a></p>';
                echo '<p class="invalid" id="wrong" style="text-align:center; visibility:hidden;"></p>';
                echo '<img src="../Images/logo.png" width="20%" style="margin:0px auto; display:block">';
            }
            else
            {

                echo '<h2 id="login-top">You are already logged in as ' .$_SESSION['user']. '</h2>';
                echo '<p style="text-align:center;"> Do you want to log out?</p>';
                echo '<form action="logout.php" method="post">';
                //echo '<input type="submit" class="login-btn" name="login" value="Login"> Log Out</button>'';
                echo '<button type="submit" class="login-btn" style="width:450px"; value="Log-Out" name="logout"> Log Out</button>';
                echo '</form>';
                echo '<img src="../Images/logo.png" width="20%" style="margin:0px auto; display:block">';
            }
        ?>
        </div>
    </div>
    
    
   
    <!-- <div class="container">
        <div class="box_model">
            <form name="loginform" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                <h2 id="login-top">LOGIN</h2>
                <div class="content">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" id="username" class="login_inputs" placeholder="Email" required>
                </div>
                <div class="content">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" id="password" class="login_inputs" placeholder="Password" required>
                </div>
                <input type="checkbox"><label> Remember Me</label>
                <a href="forgot-pass.html" class="pass_forgot">Forgot password?</a>
        
                <div class="content">
                    <input type="submit" class="login-btn" name="login" value="Login">
                </div>
            </form>
            <p style="text-align:center;">Don't have an account? <a href="sign-up.html">Sign up now!</a></p>
            <p class="invalid" id="wrong" style="text-align:center; visibility:hidden;"></p>


            <img src="../Images/logo.png" width="20%" style="margin:0px auto; display:block">
        </div>
    </div> -->

    <?php include 'footer.php';?>
    <!-- <footer>
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
                 <a href="../HTML/Home.html"><p>Home</p></a>
                 <a href="login.php"><p>Login</p></a>
                 <a href="sign-up.php"><p>Sign up</p></a>
                 <a href="../HTML/about-us.html"><p>About us</p></a>
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
     </footer> -->
</body>
</html>


<?php

    require('db_config.php');
    require('functions.php');

    if($_POST)
    {
        if(isset($_POST['login']) && $_POST['login'] == 'Login')
        {
            $user = $_POST['username'];
            $pass = $_POST['password'];


            if(isUserExists($db, $user))
            {
                $SQL = "SELECT * FROM Account WHERE Email = '$user' AND Password = '$pass'";
                
                $results =  mysqli_query($db, $SQL);
                $row = $results->fetch_assoc(); // we fetch results as associative array

                if(is_array($row) && count($row)>0)
                {
                    // start a session?!?! or should i redirect him to session.php page?
                    // user exists
                    // redirect to home page
                    $_SESSION["user"] = $row['Username'];
                    $_SESSION["is_logged"] = 1;
                    $_SESSION['send_welcome'] = 1;


                    header("Location: main.php");

                    //echo $_SESSION["user"];
                    echo '<script>location.href = "main.php";</script>';
                    
                }
                else
                {
                    // user does not exist
                    //echo '<script>alert("Invalid username or password")</script>';
                    echo 
                        '<script>
                            document.getElementById("wrong").style.visibility = "visible";
                            document.getElementById("wrong").innerHTML = " Invalid username or password "; 
                        </script>';
                }
            }
            else
            {
                // user does not exist
                //echo '<script>alert("This account doesnt exists")</script>';
                echo 
                    '<script>
                        document.getElementById("wrong").style.visibility = "visible";
                        document.getElementById("wrong").innerHTML = " This account doesnt exists "; 
                    </script>';
            }
        }
    }
?>