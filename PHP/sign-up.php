

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

    <?php include 'navbar.php'?>


    <?php 
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == 1)
        {
            header("Location: ../PHP/login.php");
            exit;
        }  
    ?>
    <div class="container">
        <div class="sign-up-box">
            <div class="content">
                <p class="invalid" id="exists" style="display:none;"></p>
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
                <p style="text-align: center;">Have an account already? <a href="../PHP/login.php">Login now</a></p>
                <img src="../Images/logo.png" width="20%" style="margin:15px auto; display:block">            
            
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

    

    <?php include 'footer.php';?>

     <script type=text/javascript src="../JS/validation.js"></script>
    
</body>
</html>


<?php

    require('db_config.php');
    require('functions.php');
    
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
                echo '<script>
                document.getElementById("exists").style.display = "inline-block";

                document.getElementById("exists").innerHTML = " This email address is associated with another account"; </script>';
                //header('Location: login.php');
                exit;
            }
            else
            {
                $_user = mysqli_real_escape_string($db, $user);
                $_email = mysqli_real_escape_string($db, $email);
                $_no = mysqli_real_escape_string($db, $no);
                $_pass = mysqli_real_escape_string($db, $pass);
    
                $SQL = "INSERT INTO Account VALUES('$_user', '$_pass', '$_no', '$_email')";
                mysqli_query($db, $SQL);
                
                $_SESSION['user'] = $user;
                $_SESSION['is_logged'] = 1;
                $_SESSION['send_welcome'] = 1;

                echo '<script>location.href ="main.php"</script>';
                
                //header('Location: login.php');
            }
        }
    }
    
?>