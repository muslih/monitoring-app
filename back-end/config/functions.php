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
    echo "<div class=\" alert-success btn-xs\">selesai</div>";
  }elseif($stat == 1 ) {
   echo  "<div class=\" alert-warning btn-xs\">proses</div>";
  }elseif($stat == 0 ){
    echo "<div class=\" alert-danger btn-xs\">belum</div>";
  }else{
    echo "<div class=\" alert-info btn-xs\">undefined</div>";
  }
}
function statuslabel($stat){
  if($stat == 2 ){
    echo "<span class=\" alert-success btn-xs\">selesai</span>";
  }elseif($stat == 1 ) {
   echo  "<span class=\" alert-warning btn-xs\">proses</span>";
  }elseif($stat == 0 ){
    echo "<span class=\" alert-danger btn-xs\">belum</span>";
  }else{
    echo "<span class=\" alert-info btn-xs\">undefined</span>";
  }
}

function level($lev){
  if ($lev == 0) {
    echo "Operator";
  }elseif ($lev == 1) {
    echo "Teknisi";
  }elseif ($lev == 2) {
    echo "Manager" ;
  }else{
    echo "Tidak didefinisikan";
  }
}

function tipelog($tipe){
  if ($tipe == 0) {
    echo "masuk";
  }elseif ($tipe == 1) {
    echo "keluar";
  }else{
    echo "Tidak didefinisikan";
  }
}

