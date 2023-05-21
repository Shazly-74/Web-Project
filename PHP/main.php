<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Main </title>
    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php'?>

    <?php 
        if(isset($_SESSION['send_welcome']) && $_SESSION['send_welcome'] == 1)
        {
            echo '<h1 style="text-align:center;">WELCOME BACK, ' . $_SESSION['user'] . '!</h1>';
            $_SESSION['send_welcome'] = 0;
        }
    ?>
    
    <div class="gallery_container">
    <?php
        require('db_config.php');

        $SQL = "SELECT * FROM items";
        $result = mysqli_query($db, $SQL);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['ID'];
            $image = $row['img_path'];
            $name = $row['Name'];
            $price = $row['Price'];
            $stock = $row['Stock'];

            if($stock > 0)
                $status = 'In Stock';
            else
                $status = 'Out of stock';

            echo '<div class="show_case">';
            echo '<a href="../PHP/product.php?id=' . $id . '"><img src="' . $image . '"></a>';
            echo '<span>';
            echo '<p><span><h6>Unisex</h6></span></p>';
            echo '<p><span><h4 class="item_title">' . $name . '</h4></span></p>';
            echo '<p><span><h3 class="price_title">' . $price . ' EGP</h3></span></p>';
            echo '<p>' . $status . '<i class="fa-solid fa-cart-shopping"></i></p>';
            echo '</span>';
            echo '</div>';
    }   
    ?>
    </div>

        <!-- <div class="show_case"><a href="../PHP/product.php?id=1"> <img src = "../Images/model_1.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">White Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></span></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
        <div class="show_case"><a href = "../PHP/product.php?id=2"><img src = "../Images/model_2.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">White Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
        <div class="show_case"><a href = "../PHP/product.php?id=2"><img src = "../Images/model_3.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">Black Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
        <div class="show_case"><a href = "/HTML/unisex-black/index.html"><img src = "../Images/model_4.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">Black Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
        <div class="show_case"><a href = "/HTML/unisex-black/index.html"><img src = "../Images/model_5.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">Black Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
        <div class="show_case"><a href = "/HTML/unisex-black/index.html"><img src = "../Images/model_6.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">White Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
        <div class="show_case"><a href = "/HTML/unisex-black/index.html"><img src = "../Images/model_7.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">White Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
        <div class="show_case"><a href = "/HTML/unisex-black/index.html"><img src = "../Images/model_8.jpg"></a><span><p><span><h6>Unisex</h6></span></p><p><span><h4 class="item_title">White Oversize Hoodie</h4></span></p><p><span><h3 class="price_title">500 EGP</h3></p><p>Out of stock<i class="fa-solid fa-cart-shopping"></i></p></span></div>
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
