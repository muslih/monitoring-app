<?php if(isset($_POST['tambah']) && $_POST['tambah'] == 'Tambah'){
  if (Produk::create(array(
        "nama_produk" => $_POST['produk']
      ))){
        header('location:index.php?page=master&master=produk&pesansukses=true');
    }else{
        header('location:index.php?page=master&master=produk&pesansukses=false');
    }
  }elseif (isset($_GET['hapus'])) {
    $data = Produk::find($_GET['hapus']);

    if($data->delete()){
        header('location:index.php?page=master&master=produk&pesansukses=true&pesan=data%20berhasil%20di%20hapus');
    }else{
        header('location:index.php?page=master&master=produk&pesansukses=false&pesan=data%20gagal%20di%20hapus');
    }
    
    // echo "Dihapus dengan data ->".$_GET['hapus'];
  } ?>

<div class="panel panel-default">
  <div class="panel-heading">
      <i class="fa fa-bar-chart-o fa-fw"></i> Master Produk
  </div>
  <!-- /.panel-heading -->
  <div class="panel-body">
      <div class="row">
          <!-- kolom setengah -->

          <div class="col-xs-12">
            <?php include 'view/content/flash.php'; ?>
            <table class="table table-bordered table-hover table-striped">
              <thead>
                  <tr>
                       <th>No</th>
                       <th>Nama Produk</th>
                       <th>Aksi</th>
                  </tr> 
              </thead> 
              <tbody>
                  <?php $produks = Produk::all() ?>
                  <?php $no = 1 ?>
                  <?php foreach ($produks as $produk) { ?>
                  <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $produk->nama_produk ?></td>
                      <td>

                          <a href="?page=master&master=produk&hapus=<?php echo $produk->id ?>"  class="btn btn-warning btn-circle" rel="tooltip" data-original-title="Hapus data"><i class="fa fa-times"></i></a>
                      </td>
                  </tr>
                  <?php $no ++ ?>
                  <?php } ?>
              </tbody>      
            </table>
          </div>

          
      </div>
  </div>
  <div class="panel-footer">
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahProduk">
        Tambah Produk
    </button>
  </div>
  <!-- /.panel-body -->
</div>

<div class="modal fade" id="tambahProduk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Produk</h4>
                </div>
                <form action="index.php?page=master&master=produk" method="post">
                <div class="modal-body">
                    
                    <!-- konten cari/tambah permintaan -->
                    <div class="form-group">
                        <label for="produk">Masukan nama produk baru</label> 
                        <input type="text" id="produk" name="produk" class="form-control" placeholder="produk kontak"> 
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>