<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-12">
                <p>Anda yakin ingin menghapus permintaan ini <?php echo $data->pelanggan->nama; ?> ?</p>
            </div>
            
        </div>
    </div>
     <!-- /.panel-body -->
    <form action="index.php?page=permintaan&hapus=<?php echo $data->id; ?>" method="post">
    <div class="panel-footer">
      <a href="?page=pelanggan" class="btn btn-primary"> Kembali </a>
      <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
    </div>
    </form>
</div>
       