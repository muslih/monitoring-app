<?php 
include 'config/koneksi.php'; 
  $login = Login::find_by_user($_POST['user']);
  if ($login) {

    if ($login->password == $_POST['pass']) {
      $_SESSION['nama'] = $login->nama;
      $_SESSION['username'] = $login->user;

      header('location:?pesansukses=true&pesan=anda%20berhasil%20login');
    }else{
      header('location:?pesansukses=false&pesan=anda%20gagal%20login,%20authentikasi%20gagal');
    }

  }else{
  header('location:?pesansukses=false&pesan=anda%20gagal%20login,%20authentikasi%20gagal');
  }