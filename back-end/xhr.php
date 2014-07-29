<?php include 'config/koneksi.php' ?>
<?php if (isset($_GET['id'])) {
  $data = Pelanggan::find($_GET['id']);
  echo $data->nama;
} ?>