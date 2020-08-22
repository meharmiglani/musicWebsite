<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	$con = mysqli_connect("nwhazdrp7hdpd4a4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "vevmf4s4kj1hboyu", "jfgtp762v8cn489g", "k5wge4zcsyza92fl");

	if(mysqli_connect_errno()){
		echo "Failed to connect: " . mysqli_connect_errno();
	}
	
?>
