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
                    <form role="form" action="" method="get">
                        <fieldset>
                            <div class="form-group">
                                <label for="nomor" class="label-control">Masukan Nomor telp  <span>0511 - </span></label>
                                <input class="form-control" placeholder="nomor" name="nomor" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                Anda pegawai? <a href="?page=login">masuk</a>
                            </div>
                            <input type="submit" class="btn btn-sm btn-success btn-block" name="lacak" value="lacak">
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php if (isset($_GET['lacak']) && $_GET['lacak'] == 'lacak'){ 

                $data = Pelanggan::find('all',array('conditions' => array('no_pelanggan = ?', $_GET['nomor'] )));
                //       Book::find('all', array('conditions' => array('genre = ?', 'Romance')));
                
            ?>

            <div class="login-panel panel panel-default">
                <div class="panel-heading">Hasil pencarians <strong>0511 - <?php echo $_GET['nomor'] ?> </strong></div>
                <div class="panel-body">
                <?php 
                    // kalo data berdasarkan nomor telp ditemukan
                    if ($data) { 
                ?>

                <?php foreach ($data as $dat) { ?>
                
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                           <tr>
                             <td>No Telp</td>
                             <td><?php echo $dat->no_pelanggan ?></td>
                           </tr>

                           <tr>
                             <td>Nama</td>
                             <td><?php echo $dat->nama ?></td>
                           </tr>
                           <tr>
                             <td>Alamat</td>
                             <td><?php echo $dat->alamat ?></td>
                           </tr>
                           <tr>
                               <td>Permintaan</td>
                               <td>
                                   <?php 
                                   foreach ($dat->permintaan as $permintaan){
                                        echo $permintaan->produk->nama_produk.'<br>';
                                   }
                                    ?>
                               </td>
                           </tr>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
                <?php   
                    // kalo data berdasarkan nomor telpon tidak ditemukan
                    }else{
                        echo "Data tidak ditemukan";
                    }
                ?>
                    

                </div>
            </div>
            <?php } ?>
        </div>

    </div>
    </div>