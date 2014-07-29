<!-- /.panel -->
<div class="col-lg-7">
    

<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-7">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                 <th>No</th>
                                 <th>Tipe</th>
                                 <th>Nomor</th>
                                 <th>Waktu</th>
                                 <th>Status </th>
                                 <th>Aksi</th>
                            </tr> 
                        </thead> 
                        
                        <tbody>
                            <?php include 'config/functions.php'; ?>
                            <?php $permintaans = Permintaan::all() ?>
                            <?php foreach ($permintaans as $permintaan) { ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                
                                <td>
                                    <?php echo $permintaan->pelanggan->tipe->detail_tipe ?>
                                </td>
                                <td>
                                    <?php echo $permintaan->pelanggan->no_pelanggan ?>
                                </td>
                                <td>
                                    <?php echo $permintaan->dibuat->format('d M Y ')?>
                                </td>
                                <td>
                                    <div class=" alert-success btn-xs">Selesai</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-circle" rel="tooltip" data-original-title="Status">
                                        <i class="fa fa-list"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-circle" rel="tooltip" data-original-title="Detail data">
                                        <i class="fa fa-link"></i>
                                    </button>
                                </td>
                            </tr>
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
            Tambah/Cari Permintaan
        </button>
    </div>

</div>
</div>
<div class="col-lg-5">
<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-7">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                 <th>No</th>
                                 <th>Tipe</th>
                                 <th>Nomor</th>
                                 <th>Waktu</th>
                                 <th>Status </th>
                                 <th>Aksi</th>
                            </tr> 
                        </thead> 
                        
                        <tbody>
                            <?php include 'config/functions.php'; ?>
                            <?php $permintaans = Permintaan::all() ?>
                            <?php foreach ($permintaans as $permintaan) { ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                
                                <td>
                                    <?php echo $permintaan->pelanggan->tipe->detail_tipe ?>
                                </td>
                                <td>
                                    <?php echo $permintaan->pelanggan->no_pelanggan ?>
                                </td>
                                <td>
                                    <?php echo $permintaan->dibuat->format('d M Y ')?>
                                </td>
                                <td>
                                    <div class=" alert-success btn-xs">Selesai</div>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-circle" rel="tooltip" data-original-title="Status">
                                        <i class="fa fa-list"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-circle" rel="tooltip" data-original-title="Detail data">
                                        <i class="fa fa-link"></i>
                                    </button>
                                </td>
                            </tr>
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
            Tambah/Cari Permintaan
        </button>
    </div>

</div>
</div>


