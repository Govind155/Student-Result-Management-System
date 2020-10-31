<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = mysqli_connect($servername, $username, $password);
	$db = mysqli_select_db($conn,'srms');


?>