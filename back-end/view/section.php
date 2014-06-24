<?php 
	if (isset($_GET["page"])) {
		// buat variable untuk method get
		$page = $_GET['page']; 
		// $page = basename($action);

		// cek apakah ada file yang dicari pada method yang ada
		if (file_exists("view/content/".$page.".php")) {

			// bila ada panggil
			include("view/content/".$page.".php");
		}else{
			// bila file tidak ditemukan panggil halaman error 404
			include("view/content/404.php");
		}
	}else{
		include("view/content/main.php");
		// kalo method get g ada
		// if ($_SERVER['PHP_SELF'] == "/index.php") {

		// 	// masukan halaman main
		// 	include("view/content/main.php");
		// }else{
		// 	// panggil halaman 404 error
		// 	include("view/content/404.php");
		// }
?>
