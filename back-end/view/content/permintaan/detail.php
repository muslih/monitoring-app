<?php if (isset($_POST['update']) && $_POST['update'] == 'update') {
    
    if (Statuspermintaan::create(array(
        "permintaan_id" => $_GET['detail'],
        "status" => $_POST['statuspermintaan']
    ))){
        header('location:index.php?page=permintaan&detail='.$_GET['detail'].'&pesansukses=true');
    }else{
        header('location:index.php??page=permintaan&detail='.$_GET['detail'].'&pesansukses=false');
    }
} ?>
<div class="panel panel-default">

    <div class="panel-heading">
        <h5>Detail Data <strong><?php echo $data->pelanggan->nama; ?></strong></h5>
    </div>


    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-6">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                           <tr>
                             <td>Tipe ID</td>
                             <td><?php echo $data->pelanggan->tipe->detail_tipe ?></td>
                           </tr>
                           <tr>
                             <td>No Pelanggan</td>
                             <td><?php echo $data->pelanggan->no_pelanggan ?></td>
                           </tr>
                           <tr>
                             <td>Gelar</td>
                             <td><?php echo $data->pelanggan->gelar ?></td>
                           </tr>
                           <tr>
                             <td>Nama</td>
                             <td><?php echo $data->pelanggan->nama ?></td>
                           </tr>
                           <tr>
                             <td>Gender</td>
                             <td><?php echo $data->pelanggan->gender->nama ?></td>
                           </tr>
                           <tr>
                             <td>Alamat</td>
                             <td><?php echo $data->pelanggan->alamat ?></td>
                           </tr>
                           <tr>
                             <td>RT</td>
                             <td><?php echo $data->pelanggan->rt ?></td>
                           </tr>
                           <tr>
                             <td>Kelurahan</td>
                             <td><?php echo $data->pelanggan->kelurahan ?></td>
                           </tr>
                           <tr>
                             <td>Kota</td>
                             <td><?php echo $data->pelanggan->kota ?></td>
                           </tr>
                           <tr>
                             <td>Kontak</td>
                             <td><?php echo $data->pelanggan->kontak ?></td>
                           </tr>
                           <tr>
                             <td>Alamat tambahan</td>
                             <td><?php echo $data->pelanggan->alamat_tambahan ?></td>
                           </tr>
                           <tr>
                             <td>Diinput pada</td>
                             <td><?php echo $data->pelanggan->dibuat->format('d M Y ')?></td>
                           </tr>
                        </tbody>      
                    </table>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="table-responsive">

                    <?php $statuses = $data->statuspermintaan ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>status</th>
                                <th>user</th>
                                <th>waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nil = 0 ?>
                            <?php foreach (array_reverse($statuses) as $stat) { ?>
                            <tr>
                                <td><?php status($stat->status) ?></td>
                                <td><?php echo $stat->user->user; ?></td>
                                <td><?php echo $stat->dibuat->format('d M Y ') ?></td>
                                <?php $nil = $stat->status ?>
                            </tr>
                            <?php } ?>

                            <?php foreach ($statuses as $stat) { ?>
                                <?php $nil = $stat->status ?>
                            <?php } ?>
                           
                        </tbody>      
                    </table>
                </div>
            </div>
            
        </div>
    </div>
     <!-- /.panel-body -->
    
    <div class="panel-footer">
      <a href="?page=permintaan" class="btn btn-primary"> Kembali </a>
      <?php if ($nil != 2){ ?>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahStatus">
        Tambah Status
      </button>
      <?php } ?>
    </div>

    <div class="modal fade" id="tambahStatus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Status</h4>
                </div>
                <form action="index.php?page=permintaan&detail=<?php echo $data->id ?>" method="post">
                <div class="modal-body">
                    
                    <!-- konten cari/tambah permintaan -->
                    <?php  ?>
                    
                    
                    <div class="form-group">
                        <label for="gelar">Update status</label> 
                        <select name="statuspermintaan" id="statuspermintaan" class="form-control">
                            <option value="0"><?php status(0)?></option>
                            <option value="1"><?php status(1)?></option>
                            <option value="2"><?php status(2)?></option>
                        </select>
                    </div>
                   

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="update" value="update">
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
