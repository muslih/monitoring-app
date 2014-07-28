<?php
  
  if ($_SESSION['nama'] != "") {
    unset($_SESSION['nama']);
    unset($_SESSION['username']);

    session_destroy();
	
  }
  header('location:?pesansukses=true&pesan=anda%20telah%20berhasil%20keluar%20dari%20sistem!');
  
?>