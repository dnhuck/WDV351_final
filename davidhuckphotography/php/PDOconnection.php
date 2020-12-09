<?php


    if(!$_SESSION['validUser'] == true){
        header('Location: ../html/login.php');
    }
// PHP PDO Connection File.
// This file used to connect to a database.
// Include this file into your application as needed.

$serverName = 'localhost'; 	// the usual default name
$username = 'dnhuck_photography'; 	//username of database
$password = '4913Sharon!'; 	//password of database
$database = 'dnhuck_photography'; 	// name of database you will be accessing

try {
    $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Submission Success! Redirecting you now";
	//header('Refresh:3; url="eventsForm.php", true, 303');
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>