<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Monitoring App</title>

    <!-- Core CSS - Include with every page -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="public/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="public/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="public/css/sb-admin.css" rel="stylesheet">
    <!-- Core Scripts - Include with every page -->
    <script src="public/js/jquery-1.10.2.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="public/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="public/js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="public/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="public/js/demo/dashboard-demo.js"></script>

</head>
<body>

    <?php ob_start(); ?>
    <?php include 'config/koneksi.php';?>
    <div id="wrapper">
        <?php  if (empty($_SESSION['nama'])){
            if (isset($_GET['page']) && $_GET['page'] == 'login') {
               include 'view/login.php';
            }else{
                include 'view/track.php';
            }
        }else{ ?>
        <!-- masukan header -->
        <?php include 'view/head.php'; ?>

        <div id="page-wrapper" style="min-height: 220px;">
            <!-- masukan konten -->
            <?php include 'view/section.php';?>
            
        </div>
        <!-- /#page-wrapper -->
        <?php } ?>

    </div>
    <!-- /#wrapper -->


</body>

</html>
