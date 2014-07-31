<?php
  
  if ($_SESSION['nama'] != "") {
    Userlog::create(array(
      "user_id" => $_SESSION['id'],
      "tipe_log" => "log out"
    ));
    unset($_SESSION['nama']);
    unset($_SESSION['username']);
    unset($_SESSION['id']);

    session_destroy();
  }
  header('location:?pesansukses=true&pesan=anda%20telah%20berhasil%20keluar%20dari%20sistem!');
  
?>