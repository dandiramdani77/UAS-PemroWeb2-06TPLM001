<?php
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "config.php";
if ($_SESSION['admin']) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Data Relawan Covid19</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="images/covid.ico">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
        <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Animation Css -->
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Bootstrap Select Css -->
        <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-blue-grey" onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-blue-grey">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <!-- Top Bar -->
        <?php
        include "waktu.php";
        ?>
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand font-bold" href="index.php">DATA RELAWAN COVID19</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="mt-10">
                            <h4 class="navbar-brand" style="font-size: 15px;"><?php echo $day . ', ' . $tgl . ' ' . $month . ' ' . $tahun; ?></h4>
                        </li>
                        <li>
                            <h4 class="navbar-brand" style="font-size: 15px;">Pukul : <span id="clock"></span>
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php
        if ($_SESSION['admin']) {
            $user = $_SESSION['admin'];
        }

        $sql = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$user'");
        $data = mysqli_fetch_assoc($sql);

        $pengguna = $data['nama'];
        ?>

        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="images/<?php echo $data['photo']; ?>" width="50" height="50" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform:uppercase;"><?php echo $data['nama']; ?></div>
                        <div class="email">Anda Login Sebagai : <span style="text-transform:uppercase;"> <?php echo $data['level']; ?></span></div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li role="separator" class="divider"></li>
                                <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active">
                            <a href="index.php">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="?page=relawan">
                                <i class="material-icons">people</i>
                                <span>Data Relawan</span>
                            </a>
                        </li>
                        <li>
                            <ul class="ml-menu">
                            </ul>
                        </li>
                        <li>
                            <ul class="ml-menu">
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> <a href="#">Kelompok 2</a>.
                    </div>
                    <div class="version">
                        <b>Version: </b> 1.0.0
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <?php

                    $page = $_GET['page'];
                    $aksi = $_GET['aksi'];
                    if ($page == "relawan") {
                        if ($aksi == "") {
                            include "page/relawan/relawan.php";
                        } elseif ($aksi == "tambah") {
                            include "page/relawan/tambah.php";
                        } elseif ($aksi == "ubah") {
                            include "page/relawan/ubah.php";
                        } elseif ($aksi == "hapus") {
                            include "page/relawan/hapus.php";
                        }
                    } else {
                        include "home.php";
                    }
                    ?>
                </div>
            </div>
        </section>


        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="plugins/node-waves/waves.js"></script>

        <!-- Jquery DataTable Plugin Js -->
        <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Sparkline Chart Plugin Js -->
        <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

        <!-- Custom Js -->
        <script src="js/admin.js"></script>
        <script src="js/pages/tables/jquery-datatable.js"></script>
        <script src="js/pages/widgets/infobox/infobox-2.js"></script>

        <!-- Demo Js -->
        <script src="js/demo.js"></script>
    </body>

    </html>
<?php
    include "waktu.php";
} else {
    header("location:login.php");
}
?>