<?php if (isset($_POST['simpan']) && $_POST['simpan'] == 'Tambah') {
    $produk = $_POST['produk'];

    if (Permintaan::create(array(
        "pelanggan_id" => $_GET['tambah'],
        "produk_id" => $produk,
      ))){
        $dat = Permintaan::last();
        Statuspermintaan::create(array(
            "permintaan_id" => $dat->id,
            "status" => 0
        ));
        header('location:index.php?page=permintaan&pesansukses=true');
    }else{
        header('location:index.php??page=permintaan&pesansukses=false');
    }
}elseif (isset($_POST['hapus']) && $_POST['hapus'] == 'Hapus') {
     $data = Permintaan::find($_GET['hapus']);
     // $datab = Permintaan::find_by_permintaan_id($_GET['hapus']);

    if($data->delete()){
        header('location:index.php?page=permintaan&pesansukses=true&pesan=data%20berhasil%20di%20hapus');
    }else{
        header('location:index.php??page=permintaan&pesansukses=false&pesan=data%20gagal%20di%20hapus');
    }
    
    // echo "Dihapus dengan data ->".$_GET['hapus'];
}
 ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Permintaan</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <?php include 'config/functions.php'; ?>
        <?php 
            // include 'config/koneksi.php';
            $tipes = Tipe::all();
            $produks = Produk::all();
            $statuspermintaan = Statuspermintaan::all();

            $no = 1;
        ?>

        <?php include 'view/content/flash.php'; ?>

        <!-- detail data permintaan -->
        <?php if (isset($_POST['query']) && $_POST['query'] == 'Tambah') {
          // $data = Permintaan::find($_GET['q']);
          include 'view/content/permintaan/query.php';
        }elseif (isset($_GET['edit'])){
          $data = Permintaan::find($_GET['edit']);
          include 'view/content/permintaan/edit.php';
        }elseif (isset($_GET['detail'])){
          $data = Permintaan::find($_GET['detail']);
          include 'view/content/permintaan/detail.php';
        }elseif(isset($_GET['hapus'])){
          $data = Permintaan::find($_GET['hapus']);
           include 'view/content/permintaan/hapus.php';
        }else{
          include 'view/content/permintaan/data.php';
        } ?>
        
        
       
        </div>
    </div>
    
</div>
<!-- /.row -->