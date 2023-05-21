<?php
    require('db_config.php');
    $id = $_GET['id'];
    $SQL = "SELECT * FROM items WHERE id = $id";
    $results = mysqli_query($db, $SQL);
    $row = $results->fetch_assoc();
    // echo "<br>";
    // echo $row['Name'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/items.css">

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;900&family=Open+Sans&display=swap" rel="stylesheet">
        <script type="text/javascript" src ="../JS/jquery-3.6.4.min.js"></script>
        


        <title><?php echo $row['Name']; ?></title>
    </head>  
    <body>
        <?php include 'navbar.php'?>
        

        <div class="container">
            <div class="show_case">
                <img src = <?php echo $row['img_path']; ?> alt = "Oversize White Hoodie" class="itempic">
            </div>
            <div class="lefttop">
                <p><?php echo $row['Name']; ?></p>
                <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half"></i>
                <span> 4.5(3)</span>
                <p style="font-weight: 200;">EGP <?php echo $row['Price']; ?>.00</p>
                <p class="canceled_fake_price">List Price:EGP 750.00</p>
                <p>Select Size</p>
                <span class="size_button" id="size1"> XS </span>
                <span class="size_button" id="size2"> S </span>
                <span class="size_button" id="size3"> M </span>
                <span class="size_button" id="size4"> L </span>
                <span class="size_button" id="size5"> XL </span>
                <span class="size_button" id="size6"> XXL </span>
                <p style="padding-top:10px;">Availablity: <span class="availablity">Only <?php echo $row['Stock']; ?> in stock</p>
                <button class="addtocart"> ADD TO CART</button>
                <i class="fa-sharp fa-regular fa-heart" style="cursor: pointer;" id="favheart"></i>
                <p style="font-size: 33px;"> 
                    <i class="fa-solid fa-truck"></i> 
                    <i class="fa-sharp fa-solid fa-money-bill"></i>
                </p>
                <p style="font-size:15px;">Free Delivery on orders above 900</p>
                
                
                <p></p>
   
            </div>
            
            
            <div class="stars">
                <img src  = <?php echo $row['img1_path']; ?> alt = "Oversize White Hoodie">
                <img src = <?php echo $row['img2_path']; ?> alt = "Oversize White Hoodie">
                <img src = <?php echo $row['img3_path']; ?> alt = "Oversize White Hoodie">

                <div class="details">
                    <p class="big_font">Product Details</p>
                    <span>
                        <li>Cotton</li>
                        <li>Machine wash</li>
                        <li>Oversized</li>
                    </span>
                    <p style="padding-top:10px;" class="big_font">Description</p>
                    <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">The black oversized hoodie is a comfortable and cozy piece of clothing that is perfect for relaxing at home or running errands on a chilly day. Made from soft and warm materials such as cotton or fleece, this hoodie is designed to be worn loosely and comfortably, with a relaxed fit that drapes over the body.</p>
                    <p class="big_font"> Reviews </p>
                </div>
            </div>
            
                
            </div>
        </div>

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
         </footer> -->

        <script type=text/javascript src="../JS/pscript.js"></script>

        
    </body>
</html>