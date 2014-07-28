
<div class="panel panel-default">

    <div class="panel-heading">
        <h5>Detail Data <?php echo $data->nama; ?></h5>
    </div>


    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                           <tr>
                             <td>Tipe ID</td>
                             <td><?php echo $data->tipe->detail_tipe ?></td>
                           </tr>
                           <tr>
                             <td>No Pelanggan</td>
                             <td><?php echo $data->no_pelanggan ?></td>
                           </tr>
                           <tr>
                             <td>Gelar</td>
                             <td><?php echo $data->gelar ?></td>
                           </tr>
                           <tr>
                             <td>Nama</td>
                             <td><?php echo $data->nama ?></td>
                           </tr>
                           <tr>
                             <td>Gender</td>
                             <td><?php echo $data->gender->nama ?></td>
                           </tr>
                           <tr>
                             <td>Alamat</td>
                             <td><?php echo $data->alamat ?></td>
                           </tr>
                           <tr>
                             <td>RT</td>
                             <td><?php echo $data->rt ?></td>
                           </tr>
                           <tr>
                             <td>Kelurahan</td>
                             <td><?php echo $data->kelurahan ?></td>
                           </tr>
                           <tr>
                             <td>Kota</td>
                             <td><?php echo $data->kota ?></td>
                           </tr>
                           <tr>
                             <td>Kontak</td>
                             <td><?php echo $data->kontak ?></td>
                           </tr>
                           <tr>
                             <td>Alamat tambahan</td>
                             <td><?php echo $data->alamat_tambahan ?></td>
                           </tr>
                           <tr>
                             <td>Diinput pada</td>
                             <td><?php echo $data->dibuat->format('d M Y ')?></td>
                           </tr>
                        </tbody>      
                    </table>
                </div>
            </div>
            
        </div>
    </div>
     <!-- /.panel-body -->
    
    <div class="panel-footer">
      <a href="?page=pelanggan" class="btn btn-primary"> Kembali </a>
    </div>
</div>
       