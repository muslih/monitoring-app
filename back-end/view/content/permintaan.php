<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Permintaan</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <?php 
            // include 'config/koneksi.php';
            $tipes = Tipe::all();
            $produks = Produk::all();
            $no = 1;
        ?>

        <?php include 'view/content/flash.php'; ?>

        <!-- detail data permintaan -->
        <?php if (isset($_POST['query']) && $_POST['query'] == 'Tambah') {
          // $data = Permintaan::find($_GET['q']);
          include 'view/content/permintaan/query.php';
        }elseif (isset($_GET['edit'])){
          $data = Permintaan::find($_GET['edit']);
          include 'view/content/permintaan/edit.php';
        }else{
          include 'view/content/permintaan/data.php';
        } ?>
        
        
       
        </div>
    </div>
    
</div>
<!-- /.row -->