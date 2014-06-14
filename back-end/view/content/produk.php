<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Master Produk</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        
        <!-- /.panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Pelanggan
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <!-- kolom setengah -->
                    <div class="col-xs-6">
                        <div class="form-group">
                            <select class="form-control" name="tipe_identifikasi" id="tipe_identifikasi">
                                <option value="dn">DN</option>
                                <option value="no_permintaan">No Permintaan</option>
                                <option value="no_pelanggan">No Pelanggan</option>
                            </select>
                        </div>
                    </div>

                    <!-- kolom setengah -->
                    <div class="col-xs-6">
                        <div class="form-group input-group"> 
                            <input class="form-control">
                            <spann class="input-group-btn">
                                <button class="btn btn-default" type="button">cari</button>
                            </spann>
                        </div>

                        <div class="form-group"> 
                            <label for="alamat">Alamat Pelanggan</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
                        </div>
                        <div class="form-group input-group"> 
                            <input type="text" class="form-control" placeholder="nomor kontak">
                            <spann class="input-group-btn">
                                <button class="btn btn-default" type="button">detail</button>
                            </spann>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h4>Informasi Umum</h4>
                        <div class="form-group"> 
                            <input class="form-control" id="tgl_buat" type="text" placeholder="Tanggal Pembuatan">
                        </div>
                        <div class="form-group"> 
                            <input class="form-control" id="tgl_buat" type="text" placeholder="Pengelola layanan">
                        </div>
                        <div class="form-group">                                         
                            <input class="form-control" id="tgl_buat" type="text" placeholder="Kategori">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <h4>Informasi Layanan</h4>
                        <div class="form-group"> 
                            <input class="form-control" id="tgl_buat" type="text" placeholder="Dossier aktif">
                        </div>
                        <div class="form-group"> 
                            <input class="form-control" id="tgl_buat" type="text" placeholder="Permintaan berlangsung">
                        </div>
                    </div>
                </div>
            </div>



            <!-- /.panel-body -->
        </div>
    </div>
    
</div>
<!-- /.row -->