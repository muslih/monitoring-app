<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Lacak permintaan</h3>
                </div>
                <div class="panel-body">
                    <?php 
                      if (isset($_POST['masuk']) && $_POST['masuk'] == 'masuk') {
                        include 'config/session_mulai.php';
                        // echo "logged in";
                      }
                      // include 'config/koneksi.php'; 
                      // $jadwal = Login::find_by_user('admin');
                      ?>
                    <?php include 'view/content/flash.php' ?>
                    <form role="form" action="index.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="nomor" class="label-control">Masukan Nomor telp  <span>0511 - </span></label>
                                <input class="form-control" placeholder="nomor" name="nomor telp" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                Anda pegawai? <a href="?page=login">masuk</a>
                            </div>
                            <input type="submit" class="btn btn-sm btn-success btn-block" name="lacak" value="lacak">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>