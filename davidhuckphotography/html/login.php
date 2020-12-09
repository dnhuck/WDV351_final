<?php

    session_start();

    

	// assign a defalt value to input fields and error messages
	$inLoginUsername = "";
	$inLoginPassword = "";

    // error messages
	$inLoginUsernameErrMsg = "";
	$inLoginPasswordErrMsg = "";

if(isset($_POST["submit"]))
	{
		// capturing the values of the form inputs
		$inLoginUsername = $_POST["username"];
		$inLoginPassword = $_POST["password"];
	
        $validForm = true; // sets a flag/switch to make sure data is valid
        // PHP validation goes here
		
		if($validForm && $inLoginUsername == 'dhuck' && $inLoginPassword == 'WDV351!'){
			
                //require('validUser.php');
                echo '<script>alert("valid")</script>';
                $_SESSION["validUser"] = "true";

                if($_SESSION["validUser"] == true){
                    header("Location: ../php/addProduct.php");
                }
			
			} else{
			
			// BAD BAD Data - Display error message, display form to user
			// 1. bad name
				// put data on the form
                // put error messege on the form
					$inLoginUsernameErrMsg = " Invalid Username";
                    $inLoginPasswordErrMsg = " Invalid Password";
                    $_SESSION['validUser'] = false;
                    	
				}
	
	}else{
		echo "<h1>Please enter your information</h1>";
		}
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
    <title>Login</title>

</head>

<body>
    <div id="userNav"></div>
        
        <form method="post" action="login.php">
            <div id="column">
                <div id="row1">	
                    <p>
                        <label for="username">Username:</label>
                    </p>
                    <p>
                        <label for="password">Password:</label>
                    </p>
                </div>
                <div id="row2">
                    <p>
                        <input type="text" name="username" id="username" value="<?php echo $inLoginUsername; ?>"><span><?php echo $inLoginUsernameErrMsg; ?> </span>
                    </p>
                    <p>
                        <input type="text" name="password" id="password" value="<?php echo $inLoginPassword; ?>"><span><?php echo $inLoginPasswordErrMsg; ?></span>
                    </p>
                </div>
            </div>
            
            <div id="buttons">
                <input type="submit" name="submit" id="submit" value="Submit">
                <input type="reset" name="reset" id="reset" value="Reset">
            </div>
        </form>
</body>
</html>