<?php

session_start();

    if(!$_SESSION['validUser'] == true){
        header('Location: ../html/login.php');
    }

	require 'PDOconnection.php'; // access and run this external file

try{
    
	$picImage = $_FILES['productImage']['name']; 
	$picName = $_POST["productName"];
	$picPrice = $_POST["productPrice"];
    $picDescription = $_POST["productDescription"];
    $picBuyNow = $_POST["productBuyNow"];
    $picBuyNow2=$_POST['productBuyNow2'];
    $picAddToCart = $_POST["addToCart"];
    $picViewCart = $_POST["viewCart"];
	//$eventTime = $_POST["eventTime"];
	//$image = $_FILES['image']['name'];

	// PDO Prepare statements

	// prepare the SQL statements

	// 1. Create the SQL statements with name placeholders
	$sql = "INSERT INTO dhp(product_image, product_Name, product_Price, product_Description, product_BuyNow, product_BuyNow2, product_AddToCart, product_ViewCart)
	VALUES (:productImage, :productName, :productPrice, :productDescription, :productBuyNow, :productBuyNow2, :addToCart, :viewCart)";

	// 2. Create the prepared statement object
	$stmt = $conn->prepare($sql); 	// creates the prepared statement object

	// Bind parameters to the prepared statement object. One for each parameter
	$stmt->bindParam(':productImage', $picImage);
	$stmt->bindParam(':productName', $picName);
	$stmt->bindParam(':productPrice', $picPrice);
    $stmt->bindParam(':productDescription', $picDescription);
    $stmt->bindParam(':productBuyNow', $picBuyNow);
    $stmt->bindParam(':productBuyNow2', $picBuyNow2);
    $stmt->bindParam(':addToCart', $picAddToCart);
    $stmt->bindParam(':viewCart', $picViewCart);

	
	//Execute the prepared statement 
	$stmt->execute();
	}

	catch(PDOException $e){
		echo "Failure. Please try again";
	}

$conn = null; // close your connection object
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert Events</title>
</head>

<body>
</body>
</html>