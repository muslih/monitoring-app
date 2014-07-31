<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Aplikasi Monitoring</h3>
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
                                <input class="form-control" placeholder="user" name="user" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="password" name="password" type="password" value="">
                            </div>
                            <!-- <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div> -->
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" class="btn btn-sm btn-success btn-block" name="masuk" value="masuk">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>