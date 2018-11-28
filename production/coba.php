<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SELECT DOCTOR - LEEMOCO HCS</title>
    <link rel="icon" type="image/png" href="images/hospital.png">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php include ('edit.php') ?> 
    <?php include('index.php') ?>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>LEEMOCO HealthCare</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $username ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
              <br>

             <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Intergrated System</h3>
                <ul class="nav side-menu">
                    <li><a class="menu-click" id="antrian" href="antrian.php"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i>Antrian</a></li>
                    <li><a class="menu-click" id="db_dokter" href="jadwaldokter.php"><i class="fa fa-user-md" aria-hidden="true"></i>Database Dokter</a></li>
                  <li><a><i class="fa fa-question-circle" aria-hidden="true"></i>Info <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="menu-click" id="help" href="fixed_sidebar.html">Help</a></li>
                      <li><a class="menu-click" id="about" href="fixed_footer.html">About</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav"> 
        <div class="web_title">LEEMOCO HealthCare Integrated System</div>
          <div class="nav_menu">
            <nav>
              <div class="nav toggle"> 
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $username; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                  </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="badan">
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list" aria-hidden="true"></i></div>
                  <div class="count">Input Informasi Pasien</div>
                    <br>
                    <br>
                  <h3><marquee>Pastikan Informasi Data Pasien Dimasukan Dengan Benar</marquee></h3>
                </div>
              </div>
            </div>
            <!-- Hapus Mulai dari sini -->
            </div>



            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dokter yang Tersedia</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                <div class="bs-example">
                    <form action="update.php" method="POST"> 
                        <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">ID Registraion</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="idregis" class="form-control" id="focusedinput" value="<?php echo $id ?>"/>
                                <input type='text' name='idregis' class='form-control' id='focusedinput' disabled value="<?php echo $id ?>"/>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">ID Pasien</label>
                            <div class="col-sm-10">
                                <input type="text" name="idpasien" class="form-control" id="focusedinput" disabled value="<?php echo $nama ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">ID Dokter</label>
                            <div class="col-sm-10">
                                <input type='text' name='iddokter' class='form-control' id='focusedinput' placeholder='Isi Id Dokter' value="<?php echo $alamat ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                                <select name="pilih dokter">
                                    <option>--Pilih Dokter--</option>
                                    <?php if (mysql_num_rows($sql) > 0) { ?>
                                        <?php while ($row = mysql_fetch_array($sql)) { ?>
                                    <option><?php echo $alamat?></option>
                                    <?php } ?>
                                <?php } ?>
                                </select>

                        </div>
                        <div class="form-group">
                            <label for="focusedinput" class="col-sm-2 control-label">Diagnosa</label>
                                <div class="col-sm-8">
                                    <input type='text' name='diagnosa' class='form-control' id='focusedinput' placeholder='Isi Keluhan' value="<?php echo $h ?>"/>
                                </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
                      <!-- STOP -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            LEEMOCO HealthCare Integrated System - All Rights Reserved
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
   </body>  
    

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</html>