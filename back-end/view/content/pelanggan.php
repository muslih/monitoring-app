<!-- tambah data -->
<?php 
if (isset($_POST['simpan']) && $_POST['simpan'] == 'Tambah') {
    $tipe_id = $_POST['tipe_id'];
    $gelar = $_POST['gelar'];
    $nama = $_POST['nama'];
    $gender_id =$_POST['gender_id'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $kota = $_POST['kota'];
    $kelurahan = $_POST['kelurahan'];
    $kontak = $_POST['kontak'];
    $alamat_tambahan = $_POST['alamat_tambahan'];
    // nomor acak
    $no_pelanggan = substr(number_format(time() * mt_rand(),0,'',''),0,7);

    // echo "dipost ment";

    // lakukan penyimpanan ke dalam database
    
    if (Pelanggan::create(array(
        "tipe_id" => $tipe_id,
        "gelar" => $gelar,
        "nama" => $nama,
        "gender_id" => $gender_id,
        "alamat" => $alamat,
        "rt" => $rt,
        "kota" => $kota,
        "kelurahan" => $kelurahan,
        "kontak" => $kontak,
        "alamat_tambahan" => $alamat_tambahan,
        "no_pelanggan" => $no_pelanggan
      ))){
        header('location:index.php?page=pelanggan&pesansukses=true');
    }else{
        header('location:index.php??page=pelanggan&pesansukses=false');
    }
}elseif (isset($_POST['update']) && $_POST['update'] == 'Update') {

    $tipe_id = $_POST['tipe_id'];
    $gelar = $_POST['gelar'];
    $nama = $_POST['nama'];
    $gender_id =$_POST['gender_id'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $kota = $_POST['kota'];
    $kelurahan = $_POST['kelurahan'];
    $kontak = $_POST['kontak'];
    $alamat_tambahan = $_POST['alamat_tambahan'];
    // $no_pelanggan = $_POST['no_pelanggan'];

    // echo "dipost ment";

    // lakukan penyimpanan ke dalam database
    // echo "ID nya adalah".;

    $data = Pelanggan::find($_GET['update']);

    if($data->update_attributes(array(
        "tipe_id" => $tipe_id,
        "gelar" => $gelar,
        "nama" => $nama,
        "gender_id" => $gender_id,
        "alamat" => $alamat,
        "rt" => $rt,
        "kota" => $kota,
        "kelurahan" => $kelurahan,
        "kontak" => $kontak,
        "alamat_tambahan" => $alamat_tambahan,
        "no_pelanggan" => $no_pelanggan
    ))){
        header('location:index.php?page=pelanggan&pesansukses=true');
    }else{
        header('location:index.php??page=pelanggan&pesansukses=false');
    }
    
    // if (Pelanggan::update(array(
    //     "tipe_id" => $tipe_id,
    //     "gelar" => $gelar,
    //     "nama" => $nama,
    //     "gender_id" => $gender_id,
    //     "alamat" => $alamat,
    //     "rt" => $rt,
    //     "kota" => $kota,
    //     "kelurahan" => $kelurahan,
    //     "kontak" => $kontak,
    //     "alamat_tambahan" => $alamat_tambahan,
    //     "no_pelanggan" => $no_pelanggan
    //   ))){
    //     header('location:index.php?page=pelanggan&pesansukses=true');
    // }else{
    //     header('location:index.php??page=pelanggan&pesansukses=false');
    // }
}elseif (isset($_POST['hapus']) && $_POST['hapus'] == 'Hapus') {
     $data = Pelanggan::find($_GET['hapus']);

    if($data->delete()){
        header('location:index.php?page=pelanggan&pesansukses=true&pesan=data%20berhasil%20di%20hapus');
    }else{
        header('location:index.php??page=pelanggan&pesansukses=false&pesan=data%20gagal%20di%20hapus');
    }
    
    // echo "Dihapus dengan data ->".$_GET['hapus'];
}

// Pelanggan::create(array("gender_id" => 1))
 ?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Pelanggan</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
 <?php 
    // include 'config/koneksi.php';
    $pelanggans = Pelanggan::all();
    $genders = Gender::all();
    $tipes = Tipe::all();
    $no = 1;
?>
<div class="row">
    <div class="col-lg-12">

        <?php include 'view/content/flash.php'; ?>
        <!-- detail data -->
        <?php if (isset($_GET['id'])) {
          $data = Pelanggan::find($_GET['id']);
          include 'view/content/pelanggan/detail.php';
        }elseif (isset($_GET['edit'])){
          $data = Pelanggan::find($_GET['edit']);
          include 'view/content/pelanggan/edit.php';
        }elseif(isset($_GET['hapus'])){
          $data = Pelanggan::find($_GET['hapus']);
          include 'view/content/pelanggan/hapus.php';
        }else{
          include 'view/content/pelanggan/data.php';
        } ?>

    </div>
    
</div>
<!-- /.row -->