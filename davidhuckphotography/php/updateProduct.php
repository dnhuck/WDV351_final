<?php
    session_start();

    if(!$_SESSION['validUser'] == true){
        header('Location: ../html/login.php');
    }
?>
<!doctype html>
<html>
<head>

    <!-- javascript files -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="../js/userNav.js"></script>

    <!-- Bootsrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    <!-- Meta Data-->
    <meta charset="UTF-8">
    <meta name="description" content="photography">
    <meta name="author" content="david huck photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Update Products</title>

</head>
<body>

    <div id="userNav"></div>
    <h1>Update Product:</h1>


<?php
    require 'selectProduct.php';
    while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
?>

    <div class="p-3 col-9 m-auto">
    <form method="POST" action="update.php" enctype="multipart/form-data" >
        <input type="hidden" name="size" value="1000000">

        <input type="hidden" name="id" value="<?php echo $row['product_ID']?>">
        <div class="form-group">
            <label for="updateImage">Update Image</label>
            <input type="file" class="form-control" id="updateImage" name="updateImage" value="$_FILES['product_image']['name'];">
        </div>

        <div class="form-group">
            <label for="updateName">Product Name</label>
            <input type="text" class="form-control" id="updateName" name="updateName"  value="<?php echo $row['product_Name']?>">
        </div>

        <div class="form-group">
            <label for="updatePrice">Update Price</label>
            <input type="text" class="form-control" id="updatePrice" name="updatePrice"  value="<?php echo $row['product_Price']?>">
        </div>

        <div class="form-group">
            <label for="updateDescription">Update Description</label>
            <textarea class="form-control" id="updateDescription" name="updateDescription"  value="<?php echo $row['product_Description']?>"> </textarea>
        </div>

        <div class="form-group">
            <label for="updateBuyNow">Update Buy Now Button Code</label>
            <textarea class="form-control" id="updateBuyNow" name="updateBuyNow"  value="<?php echo $row['product_BuyNow']?>"></textarea>
        </div>

        <div class="form-group">
            <label for="updateBuyNow2">Update Physical Good Buy Now Button Code</label>
            <textarea class="form-control" id="updateBuyNow2" name="updateBuyNow2"  value="<?php echo $row['product_BuyNow2']?>"></textarea>
        </div>

        <div class="form-group">
            <label for="updateAddToCart">Update Add To Card Button Code</label>
            <textarea class="form-control" id="updateAddToCart" name="updateAddToCart"  value="<?php echo $row['product_AddToCart']?>"></textarea>
        </div>

        <div class="form-group">
            <label for="updateViewCart">Update Buy Now Button Code</label>
            <textarea class="form-control" id="updateViewCart" name="updateViewCart"  value="<?php echo $row['product_ViewCart']?>"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
           
            
            <?php
                }
            ?>
</body>
</html>