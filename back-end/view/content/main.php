<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Selamat datang <?php echo $_SESSION['nama'] ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Total Pelanggan</div>
                    </div>
                </div>
            </div>
            <a href="?page=pelanggan">
                <div class="panel-footer">
                    <span class="pull-left">Lihat detil</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Total user</div>
                    </div>
                </div>
            </div>
            <a href="?page=master&master=user">
                <div class="panel-footer">
                    <span class="pull-left">Lihat detil</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">124</div>
                        <div>Total permintaan</div>
                    </div>
                </div>
            </div>
            <a href="?page=permintaan">
                <div class="panel-footer">
                    <span class="pull-left">Lihat detil</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-files-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Permintaan selesai</div>
                    </div>
                </div>
            </div>
            <a href="?page=permintaan">
                <div class="panel-footer">
                    <span class="pull-left">Lihat detil</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Permintaan Terbaru
                <div class="pull-right">
                    <div class="btn-group">
                      <a class="btn btn-default btn-xs dropdown-toggle" href="?page=pelanggan">Detail pelanggan</a>
                    </div>
                </div>
            </div>
            <?php include 'config/functions.php' ?>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                 <th>No</th>
                                 <th>Bana</th>
                                 <th>Nomor</th>
                                 <th>Waktu</th>
                            </tr> 
                        </thead> 
                        
                        <tbody>
                            <?php $no = 1 ?>
                            <?php $pelanggans = Pelanggan::all() ?>
                            <?php foreach ($pelanggans as $pelanggan) { ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                
                                <td>
                                    <?php echo $pelanggan->nama ?>
                                </td>
                                <td>
                                    <?php echo $pelanggan->no_pelanggan ?>
                                </td>
                                <td>
                                    <?php echo $pelanggan->dibuat->format('d M Y ')?>
                                </td>
                            </tr>
                            <?php $no++ ?>
                            <?php } ?>
                            
                        </tbody>      
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-8 -->
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bell fa-fw"></i> Permintaan terbaru
            </div>
            <?php $permintaans = Permintaan::all() ?>
            
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                      <?php foreach ($permintaans as $permintaan) { ?>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-comment fa-fw"></i> <?php echo $permintaan->pelanggan->no_pelanggan ?>
                            <?php $data = statuspermintaan::find_by_permintaan_id($permintaan->id, array('order' => 'id desc')); ?>
                                    
                            <span class="pull-right text-muted small"><em><?php status($data->status) ?></em>
                            </span>
                        </a>
                    <?php } ?>
                </div>
                <!-- /.list-group -->
                <a href="?page=permintaan" class="btn btn-default btn-block">Lihat semua permintaan</a>
            </div>
            <!-- /.panel-body -->
        </div>        
    </div>
    <!-- /.col-lg-4 -->
</div>