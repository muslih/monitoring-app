<div class="panel panel-default">
  <div class="panel-heading">
      <i class="fa fa-bar-chart-o fa-fw"></i> Proful User <strong><?php echo $_SESSION['nama'] ?></strong>
  </div>
  <!-- /.panel-heading -->
  <div class="panel-body">
      <div class="row">
          <!-- kolom setengah -->
          <div class="col-xs-12">
            <?php include 'view/content/flash.php' ?>
            <div class="table-responsive">
                    <table class="table">
                        <tbody>
                           <tr>
                            <?php $data = User::find($_SESSION['id']) ?>
                             <td>ID Akun</td>
                             <td><?php echo $data->id ?></td>
                           </tr>
                           <tr>
                             <td>User Akun</td>
                             <td><?php echo $data->user ?></td>
                           </tr>
                           <tr>
                             <td>Nama Akun</td>
                             <td><?php echo $data->nama ?></td>
                           </tr>
                           <tr>
                             <td>Level</td>
                             <td><?php echo level($data->level) ?></td>
                           </tr>
                           <tr>
                             <td>Dibuat</td>
                             <td><?php echo $data->dibuat->format('d M Y ') ?></td>
                           </tr>
                           <tr>
                             <td>Diupdate</td>
                             <td><?php if (empty($data->diupdate)) {
                               echo "---";
                             }else{echo $data->diupdate->format('d M Y ');}?></td>
                           </tr>
                          
                        </tbody>      
                    </table>
                </div>
          </div>

          
      </div>
  </div>
  <div class="panel-footer">
    
    <a href="index.php?page=akun&akun=edit" class="btn btn-primary">Edit</a>
  </div>
  <!-- /.panel-body -->
</div>

