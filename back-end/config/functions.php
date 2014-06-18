<?php 
require 'config.php';

try {
	$conn = new PDO('mysql:host=localhost;dbname=barang',$config['DB_USER'],$config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// $conn->errorCode();
	// $conn->errorInfo();
}catch (PDOException $e) {
	echo "Error : ".$e->getMessage();
}

 ?>