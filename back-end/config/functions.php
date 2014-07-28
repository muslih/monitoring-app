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



function cek_gender($gen){
  if($gen == "L" || $gen == "l"){
    return "Laki-laki"
  }elseif ($gen == "P" || $gen == "p") {
   return "Perempuan"
  }else{
    return "Tidak terdeteksi"
  }
}
