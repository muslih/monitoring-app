<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Monitoring App</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        
        <!-- /.dropdown -->
        <li>
            Selamat datang <strong><?php echo $_SESSION['nama'] ?></strong>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="?page=akun&akun=profil"><i class="fa fa-user fa-fw"></i> Profil</a>
                </li>
                <li><a href="?page=akun&akun=edit"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
                </li>
                <li class="divider"></li>
                <li><a href="index.php?page=logout"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <!-- panggil menu -->
    <?php include 'view/menu.php' ?>
    <!-- /.navbar-static-side -->
</nav>