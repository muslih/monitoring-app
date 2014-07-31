<div class="panel panel-default">
  <div class="panel-heading">
      <i class="fa fa-bar-chart-o fa-fw"></i> Log Masuk User
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
        
                  <?php $logs = Userlog::all(array('conditions' => array('tipe_log = ?', '0')))?>
                  <?php $no = 1; ?>
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahlog">
        Tambah log
    </button>
  </div>
  <!-- /.panel-body -->
</div>

<div class="modal fade" id="tambahlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah log</h4>
                </div>
                <form action="index.php?page=master&master=log" method="post">
                <div class="modal-body">
                    
                    <!-- konten cari/tambah permintaan -->
                    <div class="form-group">
                        <label for="log">Masukan nama log baru</label> 
                        <input type="text" id="log" name="log" class="form-control" placeholder="log kontak"> 
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