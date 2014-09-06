<!-- /.panel -->
<div class="panel panel-default">
    <div class="panel-heading">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPelanggan">
            Tambah Permintaan
        </button>
    </div>
    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                 <th>No</th>
                                 <th>Produk</th>
                                 <th>Nomor</th>
                                 <th>Waktu</th>
                                 <th>Status </th>
                                 <th>Aksi</th>
                            </tr> 
                        </thead> 
                        
                        <tbody>
            
                            <?php $permintaans = Permintaan::all() ?>
                            <?php foreach ($permintaans as $permintaan) { ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                
                                <td>
                                    <?php echo $permintaan->produk->nama_produk ?>
                                </td>
                                <td>
                                    0511 - <?php echo $permintaan->pelanggan->no_pelanggan ?>
                                </td>
                                <td>
                                    <?php echo $permintaan->dibuat->format('d M Y ')?>
                                </td>
                                <td>
                                    <?php $data = statuspermintaan::find_by_permintaan_id($permintaan->id, array('order' => 'id desc')); ?>
                                    <?php status($data->status) ?>
                                    <!-- <?php echo $data->status; ?> -->
                                </td>
                                <td>
                                   <!--  <button type="button" class="btn btn-primary btn-circle" rel="tooltip" data-original-title="Status">
                                        <i class="fa fa-list"></i>
                                    </button> -->
                                    <a href="?page=permintaan&detail=<?php echo $permintaan->id ?>"  class="btn btn-success btn-circle" rel="tooltip" data-original-title="Detail data"> <i class="fa fa-link"></i></a>
                                    <a href="?page=permintaan&hapus=<?php echo $permintaan->id ?>"  class="btn btn-warning btn-circle" rel="tooltip" data-original-title="Hapus data"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <?php $no++ ?>
                            <?php } ?>
                            
                        </tbody>      
                    </table>
                </div>
            </div>
            
        </div>
    </div>
     <!-- /.panel-body -->
    
    <div class="panel-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPelanggan">
            Tambah Permintaan
        </button>
    </div>
     <!-- modal #tambahPelanggan -->
    <div class="modal fade" id="tambahPelanggan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Pelanggan</h4>
                </div>
                <form action="index.php?page=permintaan" method="post">
                <div class="modal-body">
                    
                    <!-- konten cari/tambah permintaan -->
                    <div class="form-group">
                        <label for="nomor">No Pelanggan</label> 
                        <input type="text" id="nomor" name="nomor" class="form-control" placeholder="no pelanggan"> 
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="query" value="Tambah">
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>