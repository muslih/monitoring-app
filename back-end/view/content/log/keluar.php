<div class="panel panel-default">
  <div class="panel-heading">
      <i class="fa fa-bar-chart-o fa-fw"></i> Log Keluar User
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
                       <th>Tipe Log</th>
                       <th>User</th>
                       <th>Nama</th>
                       <th>Waktu</th>
                  </tr> 
              </thead> 
              <tbody>
                  <?php  
                    if ($_SESSION['level'] == "2") {
                      $logs = Userlog::all(array('conditions' => array('tipe_log = ?', '1')));
                    }else{ 
                      // $id = ;
                      $logs = Userlog::all(array('conditions' => array('tipe_log = ? AND user_id = ?', '1',$_SESSION['id']))) ;
                    } 
                  ?>
                  
                  <?php $no = 1 ?>
                  <?php foreach ($logs as $log) { ?>
                  <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo tipelog($log->tipe_log) ?></td>
                      <td><?php echo $log->user->user ?></td>
                      <td><?php echo $log->user->nama ?></td>
                      <td>
                        <?php echo $log->waktu->format('d M Y > H:i:s')?>
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
  </div>
  <!-- /.panel-body -->
</div>
