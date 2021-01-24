<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
include_once "conn.php";
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
    <title>
        Dashboard
    </title>
    <!-- Custom CSS -->
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="/">
                        <!-- Logo icon -->

                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <h4>Sistem informasi</h2>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->

            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic">
                                    <img src="../assets/images/users/1.jpg" alt="users" class="rounded-circle"
                                        width="40" />
                                </div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium">
                                            <?=$_SESSION['user']['username'];?>
                                        </h5>
                                        <span class="op-5 user-email">Menu</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>

                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=_page('dashboard');?>"
                                aria-expanded="false"><i class="mdi mdi-airplay"></i><span
                                    class="hide-menu">Materi</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=_page('nilai');?>"
                                aria-expanded="false"><i class="mdi mdi-collage"></i><span
                                    class="hide-menu">Nilai</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?=_page('guru_jadwal');?>" aria-expanded="false"><i
                                    class="mdi mdi-calendar"></i><span class="hide-menu">Jadwal</span></a>
                        </li>
                        <li class="text-center p-40 upgrade-btn">
                            <a href="<?=_url('logout')?>" class="btn btn-block btn-danger text-white">keluar</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="min-height:100vh">
                <div class="card">
                    <div class="card-body">
                        <h3>Isi nilai</h3>
                        <form action="<?=_url('nilai_tambah');?>" method="post" class="form d-flex flex-wrap">
                            <div class="form-group col-4">
                                <label class="col-md-12">siswa</label>
                                <div class="col-md-12">
                                    <select name="id_siswa" id="" class="form-control">
                                        <?php $siswa = getAll(sql("
                                    select * from siswa"));
foreach ($siswa as $s): ?>
                                        <option value="<?=$s['id_siswa'];?>">
                                            <?=$s['nama_siswa'];?>
                                        </option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-4">
                                <label class="col-md-12">jadwal</label>
                                <div class="col-md-12">
                                    <select name="id_jadwal" id="" class="form-control">
                                        <?php $jadwal = getAll(sql("
                                    select * from jadwal where
                                     id_guru={$_SESSION['user']['id_guru']}"));
foreach ($jadwal as $s): ?>
                                        <option value="<?=$s['id_jadwal'];?>">
                                            <?php
echo first(sql("select * from mapel where
                                            id_mapel={$s['id_mapel']}"))['nama_mapel']; ?>
                                        </option>
                                        <?php endforeach?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4"></div>
                            <div class="form-group col-2">
                                <label class="col-md-12">uh 1</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="uh1">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">uh 2</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="uh2">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">uh 3</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="uh3">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">uh 4</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="uh4">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">uh 5</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="uh5">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">tugas 1</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="tugas1">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">tugas 2</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="tugas2">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">tugas 3</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="tugas3">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">tugas 4</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="tugas4">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">harian</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="harian">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">uas</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="uas">
                                </div>
                            </div>
                            <div class="form-group col-2">
                                <label class="col-md-12">raport</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control" name="raport">
                                </div>
                            </div>
                            <div class="col-4 form-group">
                                <label class="col-md-12">&nbsp;</label>
                                <input type="submit" class="btn btn-success" value="simpan">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            Copyright : SMA Rafflesia
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>