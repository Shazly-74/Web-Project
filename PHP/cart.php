

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="../CSS/cart.css">

    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php'?>
    
    

    <div class="container">
    
        <div class="len">
        <div>
            <i class="fa-sharp fa-solid fa-cart-shopping" style="font-size:50px; padding:30px 0 0 70px; text-align:center;"></i>
            <h1 style="padding-left:50px;">CART</h1>
        </div>
            <table>
                    <tr>
                        <th>View</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
            </table>

            <div class="item">
                <table>
                    
                    <tr>
                        <td><img src="../Images/model_1.jpg" alt="model_1" style="width:70px; height:50px;"></td>
                        <td class="item_view">White oversized hoodie</td>
                        <td class="item_price">750.00</td>
                        <td class="item_quantity">2</td>
                        <td class="item_total">1400</td>
                        <td class="item_remove"><button class="login-btn">Remove Item</button></td>

                    </tr>
                </table>

            </div>
            <hr>

            <div class="item">
                <table>
                    <tr>
                        <td><img src="../Images/model_4.jpg" alt="model_1" style="width:70px; height:50px;"></td>
                        <td class="item_view">Cargo Pants Navy</td>
                        <td class="item_price">650.00</td>
                        <td class="item_quantity">2</td>
                        <td class="item_total">2500</td>
                        <td class="item_remove"><button class="login-btn">Remove Item</button></td>

                    </tr>
                </table>
            </div>

            <hr>
            
            <div class="item">

                <table>
                    <tr>
                        <td><img src="../Images/model_3.jpg" alt="model_1" style="width:70px; height:50px;"></td>
                        <td class="item_view">Black oversized hoodie</td>
                        <td class="item_price">550.00</td>
                        <td class="item_quantity">2</td>
                        <td class="item_total">1100</td>
                        <td class="item_remove"><button class="login-btn">Remove Item</button></td>

                    </tr>
                </table>


                <!-- <h3> White oversized hoodie</h3>
                <span>Hoodies</span>
                <p>Size:XS</p> -->
                <!-- <button>+</button>
                <button>-</button> -->
            </div>
            <hr>
            <div>
                <button class="proceed"> Continue Shooping</button>
                <button class="proceed" style="float:right;"> Proceed to Checkout</button>

            </div>
            </div>
    </div>
   
    

    <?php include 'footer.php'?>
</body>
</html>