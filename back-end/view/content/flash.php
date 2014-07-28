<?php if(isset($_GET['pesansukses']) && $_GET['pesansukses'] == 'true'){ ?>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <?php 
  if (isset($_GET['pesan'])) {
    echo $_GET['pesan'];
  }else{
   ?>
  Data berhasil disimpan kedalam database
  <?php } ?>
</div>
<?php }
if(isset($_GET['pesansukses']) && $_GET['pesansukses'] == 'false'){ ?>
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <?php 
  if (isset($_GET['pesan'])) {
    echo $_GET['pesan'];
  }else{
   ?>
  }
  Data gagal disimpan kedalam database
  <?php } ?>
</div>
<?php } ?>