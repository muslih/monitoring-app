
<div class="panel panel-default">

    <div class="panel-heading">
        <h5>Detail Data <strong><?php echo $data->pelanggan->nama; ?></strong></h5>
    </div>


    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-7">
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

            <div class="col-xs-5">
                <div class="table-responsive">

                    <?php $statuses = $data->statuspermintaan ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>status</th>
                                <th>waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_reverse($statuses) as $stat) { ?>
                            <tr>
                                <td><?php status($stat->status) ?></td>
                                <td><?php echo $stat->dibuat->format('d M Y ') ?></td>
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
      <a href="?page=permintaan" class="btn btn-primary"> Kembali </a>
    </div>
</div>
