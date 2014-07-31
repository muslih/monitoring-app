<?php if(isset($_POST['tambah']) && $_POST['tambah'] == 'Tambah'){
  if (Tipe::create(array(
        "detail_tipe" => $_POST['detail_tipe'],
        "nama_tipe" => $_POST['nama_tipe']
      ))){
        header('location:index.php?page=master&master=tipe&pesansukses=true');
    }else{
        header('location:index.php?page=master&master=tipe&pesansukses=false');
    }
  }elseif (isset($_GET['hapus'])) {
    $data = Tipe::find($_GET['hapus']);

    if($data->delete()){
        header('location:index.php?page=master&master=tipe&pesansukses=true&pesan=data%20berhasil%20di%20hapus');
    }else{
        header('location:index.php?page=master&master=tipe&pesansukses=false&pesan=data%20gagal%20di%20hapus');
    }
    
    // echo "Dihapus dengan data ->".$_GET['hapus'];
  } ?>

<div class="panel panel-default">
  <div class="panel-heading">
      <i class="fa fa-bar-chart-o fa-fw"></i> Master Tipe Pelanggan
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
                       <th>User</th>
                       <th>Nama</th>
                       <th>Level</th>
                       <th>Aksi</th>
                  </tr> 
              </thead> 
              <tbody>
                  <?php $users = Tipe::all() ?>
                  <?php $no = 1 ?>
                  <?php foreach ($users as $user) { ?>
                  <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $user->nama ?></td>
                      <td><?php echo $user->user ?></td>
                      <td><?php echo $user->level ?></td>
                      <td>

                          <a href="?page=master&master=tipe&hapus=<?php echo $user->id ?>"  class="btn btn-warning btn-circle" rel="tooltip" data-original-title="Hapus data"><i class="fa fa-times"></i></a>
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahuser">
        Tambah user
    </button>
  </div>
  <!-- /.panel-body -->
</div>

<div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah user</h4>
                </div>
                <form action="index.php?page=master&master=tipe" method="post">
                <div class="modal-body">
                    
                    <!-- konten cari/tambah permintaan -->
                    <div class="form-group">
                        <label for="detail_tipe">Masukan nama tipe</label> 
                        <input type="text" id="detail_tipe" name="detail_tipe" class="form-control" placeholder="detail tipe"> 
                    </div>

                    <div class="form-group">
                        <label for="nama_tipe">Masukan keterangan tipe</label> 
                        <input type="text" id="nama_tipe" name="nama_tipe" class="form-control" placeholder="detail tipe"> 
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