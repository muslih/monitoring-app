<div class="panel panel-default">

    <div class="panel-heading">
        <h5>Edit Data Data <?php echo $data->nama; ?></h5>
    </div>
<form action="index.php?page=pelanggan&update=<?php echo $data->id; ?>" method="post">
    <div class="panel-body">
        <div class="row">
            <!-- kolom setengah -->
            <div class="col-xs-12">

<!-- edit form -->

    <!-- gelar -->
    <div class="form-group">
        <label for="gelar">Gelar</label> 
        <input type="text" id="gelar" name = "gelar" class="form-control" value="<?php echo $data->gelar?>" required> 
    </div>

    <!-- tipe id -->
    <div class="form-group">
        <label for="tipe">Tipe</label> 
        <select name="tipe_id" id="tipe" class="form-control" required>
          <option value="<?php echo $data->tipe->id ?>"><?php echo $data->tipe->detail_tipe; ?></option>
          <option>---</option>
          <?php foreach ($tipes as $tipe) { ?>
          <option value="<?php echo $tipe->id ?> "><?php echo $tipe->detail_tipe; ?></option>                                
          <?php } ?>
        </select>
    </div>

    <!-- nama pelanggan -->
    <div class="form-group">
        <label for="nama_pelanggan">Nama Pelanggan</label> 
        <input type="text" id="nama_pelanggan" name="nama" class="form-control" value="<?php echo $data->nama ?>" placeholder="Nama Pelanggan" required> 
    </div>

    <!-- jenis kelamin -->
    <div class="form-group">
        <label for="gender">Jenis Kelamin</label> 
        <select name="gender_id" id="gender" class="form-control" required>
          <option value="<?php echo $data->gender->id ?>"><?php echo $data->gender->nama; ?></option>
          <option>---</option>
          <?php foreach ($genders as $gender) { ?>
          <option value="<?php echo $gender->id ?> "><?php echo $gender->nama; ?></option>                                
          <?php } ?>
        </select>
    </div>

    <!-- alamat -->
    <div class="form-group">
        <label for="alamat">Alamat</label> 
        <!-- <input type="text" id="alamat"class="form-control" name="alamat" placeholder="alamat">  -->
        <textarea class="form-control" name="alamat" id="alamat" name="alamat" cols="30" rows="3" required>
          <?php echo $data->alamat; ?>
        </textarea>
    </div>
    
    <!-- rt -->
    <div class="form-group">
        <label for="rt">RT</label> 
        <input type="text" id="rt" class="form-control" name="rt" placeholder="RT" value="<?php echo $data->rt; ?>" required> 
    </div>
    <!-- kota -->
    <div class="form-group">
        <label for="kota">Kota</label> 
        <input type="text" id="kota" name="kota" class="form-control" placeholder="kota" value="<?php echo $data->kota; ?>"  required> 
    </div>

    <!-- kelurahan -->
    <div class="form-group">
        <label for="kelurahan">Kelurahan</label> 
        <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="kelurahan" value="<?php echo $data->kelurahan; ?>"  required >
    </div>

    <!-- kontak -->
    <div class="form-group">
        <label for="kontak">Kontak</label> 
        <input type="text" id="kontak" name="kontak" class="form-control" placeholder="nomor kontak"  value="<?php echo $data->kontak; ?>" required> 
    </div>

    <!-- alamat tambahan -->
    <div class="form-group">
        <label for="alamat_tambahan">Alamat Tambahan</label> 
        <!-- <input type="text" id="alamat"class="form-control" name="alamat" placeholder="alamat">  -->
        <textarea class="form-control" name="alamat_tambahan" id="alamat_tambahan" name="alamat_tambahan" cols="30" rows="3">
          <?php echo $data->alamat_tambahan; ?>
        </textarea>
    </div>
    
    <!-- no pelanggan -->
    <div class="form-group">
        <label for="no_pelanggan">No Pelanggan</label> 
        <input type="text" id="no_pelanggan" name="no_pelanggan" class="form-control" placeholder="nomor pelanggan"  value="<?php echo $data->no_pelanggan; ?>" required> 
    </div>

   

            </div>
            
        </div>
    </div>
     <!-- /.panel-body -->
    
    <div class="panel-footer">
      <a href="?page=pelanggan" class="btn btn-primary"> Kembali </a>
      <input type="submit" class="btn btn-primary" name="update" value="Update">
    </div>
    </form>
</div>
       
