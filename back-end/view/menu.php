<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <?php  if ($_SESSION['level'] == "2") { ?> 
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=master&master=produk">Master Produk</a>
                    </li>
                    <li>
                        <a href="?page=master&master=tipe">Master Tipe</a>
                    </li>
                    <li>
                        <a href="?page=master&master=user">Master User</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <?php } ?>
            <li>
                <a href="?page=pelanggan"><i class="fa fa-group fa-fw"></i> Pelanggan</span></a>
            </li>
            <li>
                <a href="?page=permintaan"><i class="fa fa-list fa-fw"></i> Permintaan</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Akun<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=akun&akun=profil">Profil</a>
                    </li>
                    <li>
                        <a href="?page=akun&akun=edit">Pengaturan</a>
                    </li>
                    <li>
                        <a href="?page=logout">Keluar</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Catatan Log<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="?page=log&log=masuk">Log Masuk</a>
                    </li>
                    <li>
                        <a href="?page=log&log=keluar">Log Keluar</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>

