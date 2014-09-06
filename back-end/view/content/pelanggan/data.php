<!-- /.panel -->
<div class="panel panel-default">

    <div class="panel-heading">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPelanggan">
            Tambah Pelanggan
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
                                 <th>Tipe</th>
                                 <th>Nomor</th>
                                 <th>Nama</th>
                                 <th>Aksi</th>
                            </tr> 
                        </thead> 
                        <tbody>
                            <?php foreach ($pelanggans as $pelanggan) { ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo  $pelanggan->tipe->detail_tipe ?></td>
                                <td><?php echo  $pelanggan->nama ?></td>
                                <td>0511 - <?php echo $pelanggan->no_pelanggan ?></td>
                                <td>
                                    <a href="?page=pelanggan&id=<?php echo $pelanggan->id ?>" class="btn btn-primary btn-circle" rel="tooltip" data-original-title="Permintaan"><i class="fa fa-list"></i></a>
                                    <a href="?page=pelanggan&edit=<?php echo $pelanggan->id ?>" class="btn btn-success btn-circle" rel="tooltip" data-original-title="Detail data"><i class="fa fa-link"></i></a>
                                    
                                    <a href="?page=pelanggan&edit=<?php echo $pelanggan->id ?>"  class="btn btn-info btn-circle" rel="tooltip" data-original-title="Edit data"><i class="fa fa-check"></i></a>
                                    <a href="?page=pelanggan&hapus=<?php echo $pelanggan->id ?>"  class="btn btn-warning btn-circle" rel="tooltip" data-original-title="Hapus data"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <?php $no ++ ?>
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
            Tambah Pelanggan
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
                <form action="index.php?page=pelanggan" method="post">
                <div class="modal-body">
                    
                    <!-- konten tambah pelanggan -->

                    <!-- gelar -->
                    <div class="form-group">
                        <label for="gelar">Gelar</label> 
                        <input type="text" id="gelar" name = "gelar" class="form-control" placeholder="gelar" required> 
                    </div>

                    <!-- tipe id -->
                    <div class="form-group">
                        <label for="tipe">Tipe</label> 
                        <select name="tipe_id" id="tipe" class="form-control" required>
                             <?php foreach ($tipes as $tipe) { ?>
                             <option value="<?php echo $tipe->id ?> "><?php echo $tipe->detail_tipe; ?></option>                                
                             <?php } ?>
                        </select>
                    </div>

                    <!-- nama pelanggan -->
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label> 
                        <input type="text" id="nama_pelanggan" name="nama" class="form-control" placeholder="Nama Pelanggan" required> 
                    </div>

                    <!-- jenis kelamin -->
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label> 
                        <select name="gender_id" id="gender" class="form-control" required>
                             <?php foreach ($genders as $gender) { ?>
                             <option value="<?php echo $gender->id ?> "><?php echo $gender->nama; ?></option>                                
                             <?php } ?>
                        </select>
                    </div>

                    <!-- alamat -->
                    <div class="form-group">
                        <label for="alamat">Alamat</label> 
                        <!-- <input type="text" id="alamat"class="form-control" name="alamat" placeholder="alamat">  -->
                        <textarea class="form-control" name="alamat" id="alamat" name="alamat" cols="30" rows="3" required></textarea>
                    </div>
                    
                    <!-- rt -->
                    <div class="form-group">
                        <label for="rt">RT</label> 
                        <input type="text" id="rt" class="form-control" name="rt" placeholder="RT" required> 
                    </div>
                    <!-- kota -->
                    <div class="form-group">
                        <label for="kota">Kota</label> 
                        <input type="text" id="kota" name="kota" class="form-control" placeholder="kota" required> 
                    </div>

                    <!-- kelurahan -->
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label> 
                        <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="kelurahan"required >
                    </div>

                    <!-- kontak -->
                    <div class="form-group">
                        <label for="kontak">Kontak</label> 
                        <input type="text" id="kontak" name="kontak" class="form-control" placeholder="nomor kontak" required> 
                    </div>

                    <!-- alamat tambahan -->
                    <div class="form-group">
                        <label for="alamat_tambahan">Alamat Tambahan</label> 
                        <!-- <input type="text" id="alamat"class="form-control" name="alamat" placeholder="alamat">  -->
                        <textarea class="form-control" name="alamat_tambahan" id="alamat_tambahan" name="alamat_tambahan" cols="30" rows="3"></textarea>
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Tambah">
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
       
</div>