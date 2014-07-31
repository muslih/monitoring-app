<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Master</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
      <?php include 'config/functions.php'; ?>
      <?php if($_GET['master'] == 'produk'): ?>
        <?php include 'view/content/master/produk.php' ?>
      <?php elseif($_GET['master'] == 'tipe'): ?>
        <?php include 'view/content/master/tipe.php' ?>
      <?php elseif($_GET['master'] == 'user'): ?>
        <?php include 'view/content/master/user.php' ?>
      <?php endif ?>
    </div>
</div>
    
</div>