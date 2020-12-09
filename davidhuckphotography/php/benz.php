<?php
    session_start();

    if(!$_SESSION['validUser'] == true){
        header('Location: ../html/login.php');
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Css files -->
    <link src="../css/index.css" type="text/css" rel="stylesheet">

    <!-- javascript files -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/about.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Bootsrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 
    <!-- Meta Date -->
    <meta charset="UTF-8">
    <meta name="description" content="photography">
    <meta name="author" content="david huck photography">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Benz</title>

</head>
<body class="p-2 border">
    
    <h1>Product Purchased! Mercedez Benz Print</h1>
    <h2>Thank you for supporting David Huck Photography</h1>
    <h2>*Please allow for two weeks if you purchased the Paper Print*</h2>


    <div>
        <ul>
            <li><a href="../images/benz/benz.jpg" download>Benz JPG</a></li>
            <li><a href="../images/benz/benz.png" download>Benz PNG</a></li>
            <p>If your download has not started within 10 seconds, click the link(s) above</p>
        </ul>
    </div>

    <h2><a href="../html/gallery.html">Click Here To Return To David Huck Photography</a></h2>



    <!-- Footer -->
    <footer></footer>

</body>
</html>