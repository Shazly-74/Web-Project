<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="../CSS/wishlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>My wishlist</title>
</head>
<body>
    <?php include 'navbar.php'?>

    <div class="container">
        <div>
            <i class="fa-sharp fa-regular fa-heart" style="font-size:50px; padding:30px 0 0 70px;" id="favheart"></i>
            <h1>MY WISHLIST</h1>
        </div>
    </div>

    <div class="fav_title">
        <h3>View</h3>
        <h3>Name</h3>
        <h3>Price</h3>
        <h3>Stock</h3>
    </div>
    <hr>

    <div class="fav_items">
        <img src="../Images/model_1.jpg" alt="model_1" style="width:50px; height:50px; padding: 0 0 0 20px;">
        <p> Oversized hoodie</p>
        <p> EGP 750.00</p>
        <p> 3 </p>
    </div>
    <div class="fav_items">
        <img src="../Images/model_1.jpg" alt="model_1" style="width:50px; height:50px; padding: 0 0 0 20px;">
        <p> Oversize Hoodie</p>
        <p> EGP 750.00</p>
        <p> 3 </p>
    </div>



    

    <!-- <div class="show_case">
        <img src="../Images/model_1.jpg" alt="model_1" style="width:50px; height:50px;"><span> Oversize White Hoodie</span>
    </div>
    <div class="show_case">
    </div> -->
        
    <!-- <hr> -->

    
    
    
    <?php include 'footer.php'?>
</body>
</html>