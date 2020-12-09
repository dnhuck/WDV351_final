<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Css files -->
    <link src="../css/index.css" type="text/css" rel="stylesheet">

    <!-- javascript files -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/store.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Bootsrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    <!-- Meta Data-->
    <meta charset="UTF-8">
    <meta name="description" content="photography">
    <meta name="author" content="david huck photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <?php 
    require '../php/selectProduct.php';
    require '../php/PDOconnection.php';
    ?>

<!doctype html>
<html>
<head>
    <!-- Css files -->
    <link src="../css/product.css" type="text/css" rel="stylesheet">

    <!-- javascript files -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/Nav.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Bootsrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    <!-- Meta Data-->
    <meta charset="UTF-8">
    <meta name="description" content="photography">
    <meta name="author" content="david huck photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Products</title>

</head>
<body>

    <div id="Nav"></div>
<?php
    while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
?>

<div class="m-auto" style="width: 400px;">
        <div class="card h-90">
            <p> * NOTE: ALL PAPER PRINTS COME WITH A DIGITAL COPY </p>
            <img src="../images/<?php echo $row['product_image']; ?>" name="productImage" id="productImage" class="card-img-top">

            <div class="card-body m-auto">

                <h2 class="card-title text-center">
                    <?php echo $row['product_Name'];?>
                </h2>

                <h5 class="text-center">$ <?php echo $row['product_Price'];?></h5>

                <h5 class="card-text"> <?php echo $row['product_Description'];?></h5>

                <center>
                    <h5>Buy Now Online Print</h5>
                    <p><?php echo $row['product_BuyNow'];?></p>

                    <h5>Buy Now Paper Print</h5>
                    <p><?php echo $row['product_BuyNow2'];?></p>

                    <h5>Add To Cart Online Print</h5>
                    <p><?php echo $row['product_AddToCart'];?></p>

                    <h5>Add To Cart Paper Print</h5>
                    <p><?php echo $row['product_ViewCart'];?></p>

                    <h5>View Cart</h5>
                    <p>
                    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
                        <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    </p>
                </center>
        </div>
    </div>

    <!-- Temporary filler for gap between cards -->
    <p></p>
<?php
    };
?>
</body>
</html>


    <title>Gallary</title>

</head>
<body>
    
    <!-- NavBar -->
    <header></header>

    <!-- Footer -->
    <footer></footer>

</body>
</html>