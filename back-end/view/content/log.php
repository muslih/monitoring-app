<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Log Masuk & Keluar</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
      <?php include 'config/functions.php'; ?>
      <?php if($_GET['log'] == 'masuk'): ?>
        <?php include 'view/content/log/masuk.php' ?>
      <?php elseif($_GET['log'] == 'keluar'): ?>
        <?php include 'view/content/log/keluar.php' ?>
      <?php endif ?>
    </div>
</div>
    
</div>