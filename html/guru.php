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
                                aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                                    class="hide-menu">Siswa</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=_page('guru');?>"
                                aria-expanded="false"><i class="mdi mdi-account"></i><span
                                    class="hide-menu">Guru</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=_page('kelas');?>"
                                aria-expanded="false"><i class="mdi mdi-collage"></i><span
                                    class="hide-menu">Kelas</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=_page('mapel')?>"
                                aria-expanded="false"><i class="mdi mdi-airplay"></i><span
                                    class="hide-menu">Mapel</span></a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=_page('jadwal');?>"
                                aria-expanded="false"><i class="mdi mdi-calendar-text"></i><span
                                    class="hide-menu">Jadwal</span></a>
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
                        <div class="col-4">
                            <a href="<?=_page('guru_tambah');?>"
                                class="btn btn-success <?=$_SESSION['tipe'] == 'Kepala Sekolah' ? 'd-none' : ''?>">Tambah
                                data</a>
                        </div>
                        <div class="table-responsive mt-2">
                            <table class="text-center table v-middle data-out" id="out-1">
                                <thead class="bg-light">
                                    <tr>
                                        <th>NIP</th>
                                        <th>nama</th>
                                        <th>jenis kelamin</th>
                                        <th>pendidikan</th>
                                        <th>no telpon</th>
                                        <th>jabatan</th>
                                        <th class="<?=$_SESSION['tipe'] == 'Kepala Sekolah' ? 'd-none' : ''?>">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $data = sql("select * from guru");
$guru = getAll($data);?>
                                    <?php foreach ($guru as $s): ?>
                                    <tr>
                                        <td><?=$s['nip'];?></td>
                                        <td><?=$s['nama_guru'];?></td>
                                        <td><?=$s['jenis_kelamin'];?></td>
                                        <td><?=$s['pendidikan'];?></td>
                                        <td><?=$s['no_telpon'];?></td>
                                        <td><?=$s['jabatan'] == null ? "guru" : $s['jabatan'];?></td>
                                        <td
                                            class="<?=$_SESSION['tipe'] == 'Kepala Sekolah' ? 'd-none' : 'd-flex'?> justify-content-center">
                                            <a href="<?=_view('guru_edit', '?id=' . $s['id_guru']);?>"
                                                class="mx-2 btn btn-success">edit</a>
                                            <a href="<?=_get('guru_hapus', '?id=' . $s['id_guru']);?>"
                                                class="mx-2 btn btn-danger">hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                        </div>
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