<?php
  $login = User::find_by_user($_POST['user']);
  if ($login) {

    if ($login->password == $_POST['password']) {
      $_SESSION['nama'] = $login->nama;
      $_SESSION['username'] = $login->user;
      $_SESSION['id'] = $login->id;

      Userlog::create(array(
        "user_id" => $_SESSION['id'],
        "tipe_log" => "log in"
      ));

      header('location:?pesansukses=true&pesan=anda%20berhasil%20login');
    }else{
      header('location:?pesansukses=falsse&pesan=anda%20gagal%20login,%20authentikasi%20gagal');
    }

  }else{
  header('location:?pesansukses=false&pesan=anda%20gagal%20login,%20authentikasi%20gagal');
  }