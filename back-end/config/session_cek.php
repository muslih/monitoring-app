<?php 
  if ($_SESSION['nama'] =='') {
    header('location:?pesansukses=false&pesan=anda%20harus%20login%20kedalam%20sistem%20terlebih%20dahulu!');
  }
