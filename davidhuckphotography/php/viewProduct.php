<?php 

session_start();

    if(!$_SESSION['validUser'] == true){
        header('Location: login.php');
    }
    
    require 'selectProduct.php';
    require 'PDOconnection.php';
?>

<!doctype html>
<html>
<head>
    <!-- Css files -->
    <link src="../css/product.css" type="text/css" rel="stylesheet">

    <!-- javascript files -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/userNav.js"></script>
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

    <div id="userNav"></div>
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

