<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Akun</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
      <?php include 'config/functions.php'; ?>
      <?php if($_GET['akun'] == 'profil'): ?>
        <?php include 'view/content/akun/profil.php' ?>
      <?php elseif($_GET['akun'] == 'edit'): ?>
        <?php $data = User::find($_SESSION['id']) ?>
        <?php include 'view/content/akun/edit.php' ?>
      <?php endif ?>
    </div>
</div>
    
</div>