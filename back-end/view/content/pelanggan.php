<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Pelanggan</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        
        <!-- /.panel -->
        <div class="panel panel-default">

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
                                         <th>Aksi</th>
                                    </tr> 
                                </thead> 
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>DN</td>
                                        <td>32132131</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-circle" rel="tooltip" data-original-title="Permintaan">
                                                <i class="fa fa-list"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-circle" rel="tooltip" data-original-title="Detail data">
                                                <i class="fa fa-link"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-circle" rel="tooltip" data-original-title="Edit data">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-circle" rel="tooltip" data-original-title="Hapus data" >
                                                <i class="fa fa-times"></i> 
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>No Permintaan</td>
                                        <td>32132131</td>
                                        <td>                                        
                                            <button type="button" class="btn btn-primary btn-circle" rel="tooltip" data-original-title="Permintaan">
                                                <i class="fa fa-list"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-circle" rel="tooltip" data-original-title="Detail data">
                                                <i class="fa fa-link"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-circle" rel="tooltip" data-original-title="Edit data">
                                                <i class="fa fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-circle" rel="tooltip" data-original-title="Hapus data" >
                                                <i class="fa fa-times"></i> 
                                            </button>
                                        </td>
                                    </tr>
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
                        <div class="modal-body">
                            
                            <!-- konten tambah pelanggan -->

                            <!-- gelar -->
                            <div class="form-group">
                                <label for="gelar">Gelar</label> 
                                <input type="text" id="gelar"class="form-control" placeholder="nomor kontak"> 
                            </div>

                            <!-- nama pelanggan -->
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label> 
                                <input type="text" id="nama_pelanggan"class="form-control" placeholder="nomor kontak"> 
                            </div>

                            <!-- jenis kelamin -->
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label> 
                                <input type="text" id="jenis_kelamin"class="form-control" placeholder="nomor kontak"> 
                            </div>


                            <div class="form-group">
                                <label for="contact_person">Contact Person</label> 
                                <input type="number" id="contact_person"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="tipe_identitas">Tipe Identitas</label> 
                                <input type="text" id="tipe_identitas"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="pengelola_layanan">Pengelola Layanan</label> 
                                <input type="text" id="pengelola_layanan"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="kategori_layanan">Kategori Layakan</label> 
                                <input type="text" id="kategori_layanan"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label> 
                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label> 
                                <input type="text" id="kota"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="kelurahan">Kelurahan</label> 
                                <input type="text" id="Kelurahan"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="jalan">Jalan</label> 
                                <input type="text" id="jalan"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor</label> 
                                <input type="number" id="nomor"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="nomor">RT/RW</label> 
                                <input type="number" id="nomor"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="alamat_tambahan">Alamat Tambahan</label> 
                                <input type="number" id="alamat_tambahan"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="komentar">Komentar</label> 
                                <input type="number" id="komentar"class="form-control" placeholder="nomor kontak"> 
                            </div>
                            <div class="form-group">
                                <label for="no_pelanggan">No Pelanggan</label> 
                                <input type="number" id="no_pelanggan"class="form-control" placeholder="nomor kontak"> 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Tambah </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
       
        </div>
    </div>
    
</div>
<!-- /.row -->