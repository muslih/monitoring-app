<?php if (isset($_POST['update']) && $_POST['update'] == 'Update') {
  $data = User::find($_SESSION['id']);

    if($data->update_attributes(array(
        "user" => $_POST['user'],
        "nama" => $_POST['nama'],
        "password" => $_POST['password']
    ))){
        header('location:index.php?page=akun&akun=profil&pesansukses=true');
    }else{
        header('location:index.php?page=akun&akun=profil&pesansukses=false');
    }
} ?>
<div class="panel panel-default">
  <div class="panel-heading">
      <i class="fa fa-bar-chart-o fa-fw"></i> Edit Akun <strong><?php echo $_SESSION['nama'] ?></strong>
  </div>
  <!-- /.panel-heading -->
  <form action="index.php?page=akun&akun=edit" method="post">
  <div class="panel-body">
      <div class="row">
          <!-- kolom setengah -->
          <div class="col-xs-12">
            <?php $data = User::find($_SESSION['id']) ?>
            <div class="form-group">
              <label for="user">User</label> 
              <input type="text" id="user" name = "user" class="form-control" value="<?php echo $data->user ?>" required> 
            </div>

            <div class="form-group">
              <label for="nama">Nama</label> 
              <input type="text" id="nama" name = "nama" class="form-control" value="<?php echo $data->nama ?>" required> 
            </div>

            <div class="form-group">
              <label for="password">Password</label> 
              <input type="password" id="password" name = "password" class="form-control" value="<?php echo $data->password ?>" required> 
            </div>
          </div>
      </div>
  </div>
  <div class="panel-footer">
    <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
    <input type="submit" class="btn btn-primary" name="update" value="Update">
  </div>
  </form>
  <!-- /.panel-body -->
</div>

