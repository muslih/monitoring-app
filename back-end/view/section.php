<?php 
	if(isset($_GET["page"])){
		if ($_GET["page"] == "" || $_GET["page"] == "awal") {
			include "view/content/main.php";
		}elseif( $_GET["page"] == "produk"){
			include "view/content/produk.php";
		}else{
			include "view/content/main.php";
		}
	}else{
		include "view/content/main.php";
	}
?>
