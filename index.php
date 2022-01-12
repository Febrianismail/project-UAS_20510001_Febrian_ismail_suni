<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/LOGO-UNIGA-ONLY.png" type="image/ico" />

  <title> Universitas Gajayana </title>


  <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="assets/nprogress/nprogress.css" rel="stylesheet">

  <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">

  <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

  <link href="assets/css/custom.min.css" rel="stylesheet">
</head>



<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class=" left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <center>
              &nbsp; <span><a href="index.php">
                  <img src="assets/images/LOGO-UNIGA-ONLY.png" width="50" height="50">
                  <font size="4.95" color="white" face="Helvetica Neue">
                    Universitas Gajayana
                  </font>
              </span></a>
            </center>
          </div>

          <div class="clearfix"></div>


          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="assets/images/user-icon.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>
                <?php
                session_start();
                echo $_SESSION['username']
                ?>
              </h2>
            </div>
          </div>


          <br />


          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="#"><i class="fa fa-desktop"></i> Data Mahasiswa <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=tampil_mhs">Tampil Data</a></li>
                    <li><a href="index.php?page=tambah_mhs">Tambah Data</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Data Dosen <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=tampil_dsn">Tampil Data</a></li>
                    <li><a href="index.php?page=tambah_dsn">Tambah Data</a></li>
                  </ul>
                </li>

                <li><a><i class="fa fa-desktop"></i> Data MataKuliah <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=tampil_mtk">Tampil Data</a></li>
                    <li><a href="index.php?page=tambah_mtk">Tambah Data</a></li>
                  </ul>
                </li>

              </ul>
            </div>
          </div>



          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>

        </div>
      </div>


      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open">
                <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/user-icon.png" alt="">
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#"> Profile</a>
                  <a class="dropdown-item" href="#">

                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>



    </div>
    <div class="right_col" role="main">
      <?php
      $queries = array();
      parse_str($_SERVER['QUERY_STRING'], $queries);
      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      switch ($queries['page']) {
        case 'tampil_mhs':
          include 'tampil_data_mahasiswa.php';
          break;
        case 'tambah_mhs':
          include 'tambah_data_mahasiswa.php';
          break;
        case 'edit_mhs':
          include 'edit.php';
          break;
        case 'edit_mhs_save':
          include 'edit.php';
          break;
        case 'tampil_dsn':
          include 'tampil_data_dosen.php';
          break;
        case 'tambah_dsn':
          include 'tambah_data_dosen.php';
          break;
        case 'edit_dsn':
          include 'edit_dosen.php';
          break;
        case 'edit_dsn_save':
          include 'edit_dosen.php';
          break;
        case 'tampil_mtk':
          include 'tampil_data_matakuliah.php';
          break;
        case 'tambah_mtk':
          include 'tambah_data_matakuliah.php';
          break;
        case 'edit_mtk':
          include 'edit_mtk.php';
          break;
        case 'edit_mtk':
          include 'edit_mtk.php';
          break;
        default:
          include 'home.php';
          break;
      }
      ?>
    </div>



    <footer>
      <div class="pull-right">
        Copyright @ 2021 Universitas Gajayana
      </div>
      <div class="clearfix"></div>
    </footer>

  </div>
  </div>


  <script src="assets/jquery/dist/jquery.min.js"></script>
  <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/fastclick/lib/fastclick.js"></script>
  <script src="assets/nprogress/nprogress.js"></script>
  <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="assets/iCheck/icheck.min.js"></script>
  <script src="assets/skycons/skycons.js"></script>
  <script src="assets/js/custom.min.js"></script>

</body>

</html>