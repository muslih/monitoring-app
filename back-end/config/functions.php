<?php 
// require 'config.php';

// try {
// 	$conn = new PDO('mysql:host=localhost;dbname=barang',$config['DB_USER'],$config['DB_PASSWORD']);
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	// $conn->errorCode();
// 	// $conn->errorInfo();
// }catch (PDOException $e) {
// 	echo "Error : ".$e->getMessage();
// }



function status($stat){
  if($stat == 2 ){
    return "<div class=\" alert-success btn-xs\">selesai</div>";
  }elseif($stat == 1 ) {
   return  "<div class=\" alert-warning btn-xs\">proses</div>";
  }elseif($stat == 0 ){
    return "<div class=\" alert-danger btn-xs\">belum</div>";
  }else{
    return "<div class=\" alert-info btn-xs\">undefined</div>";
  }
}
