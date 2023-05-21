<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    </head>
<body>
    <div class="navbar">
        <a href="home.php"><img src="../Images/logo white.png" class="logo"></a>
        <ul>
            <li><a href="about_us.php">About us</a></li>
            <li><a href="#">Contact us</a></li>
            <?php if(isset($_SESSION['is_logged']))
            {
                echo '<li><a href="../PHP/login.php">Logout</a></li>';
                echo '<li><a href="../PHP/order-history.php">Order History</a></li>';
                
                echo '<li><a href="../PHP/cart.php"><i class="fa-solid fa-cart-shopping"></a></i></li>';

                echo '<li><a href="../PHP/cart.php"><i class="fa-solid fa-circle-user"></a></i></li>';

            }
            else
            {
                echo '<li><a href="../PHP/login.php">Login</a></li>';
                echo '<li><a href="../PHP/sign-up.php">Sign up</a></li>';
            }
            ?>
            
        </ul>
        
    </div>
</body>
</html>