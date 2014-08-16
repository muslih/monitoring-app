<?php if(isset($_POST['tambah']) && $_POST['tambah'] == 'Tambah'){
  if (User::create(array(
        "nama" => $_POST['nama'],
        "user" => $_POST['user'],
        "password" => $_POST['password'],
        "level" => $_POST['level']
      ))){
        header('location:index.php?page=master&master=user&pesansukses=true');
    }else{
        header('location:index.php?page=master&master=user&pesansukses=false');
    }
  }elseif (isset($_GET['hapus'])) {
    $data = User::find($_GET['hapus']);

    if($data->delete()){
        header('location:index.php?page=master&master=user&pesansukses=true&pesan=data%20berhasil%20di%20hapus');
    }else{
        header('location:index.php?page=master&master=user&pesansukses=false&pesan=data%20gagal%20di%20hapus');
    }
    
    // echo "Dihapus dengan data ->".$_GET['hapus'];
  } ?>

<div class="panel panel-default">
  <div class="panel-heading">
      <i class="fa fa-bar-chart-o fa-fw"></i> Master Data User
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
                  <?php $users = User::all() ?>
                  <?php $no = 1 ?>
                  <?php foreach ($users as $user) { ?>
                  <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $user->nama ?></td>
                      <td><?php echo $user->user ?></td>
                      <td><?php echo level($user->level) ?></td>
                      <td>

                          <a href="?page=master&master=user&hapus=<?php echo $user->id ?>"  class="btn btn-warning btn-circle" rel="tooltip" data-original-title="Hapus data"><i class="fa fa-times"></i></a>
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
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahuser">
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
                <form action="index.php?page=master&master=user" method="post">
                <div class="modal-body">
                    
                    <!-- konten cari/tambah permintaan -->
                    <div class="form-group">
                        <label for="nama">Nama</label> 
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="nama"> 
                    </div>

                    <div class="form-group">
                        <label for="user">User</label> 
                        <input type="text" id="user" name="user" class="form-control" placeholder="user"> 
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label> 
                        <input type="password" id="password" name="password" class="form-control" placeholder="password"> 
                    </div>

                    <div class="form-group">
                        <label for="level">Level</label> 
                        <select name="level" id="level"  class="form-control" >
                          <option value="0"><?php echo level(0) ?></option>
                          <option value="1"><?php echo level(1) ?></option>
                          <option value="2"><?php echo level(2) ?></option>
                        </select>
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