<?php
    //header("Access-Control-Allow-Headers: X-Requested-With, X-Prototype-Version");
    
	$servername = "localhost";
	$username = "dgb11";
	$password = "ekfrnqjf112233";
    $dbname = "dgb11";
    // $dbport = 3306;

    $conn = mysqli_connect($servername, $username, $password, $dbname);
	// $conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
    }
?>
