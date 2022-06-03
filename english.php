<!-- Huu ni ukurasa wa nyumbani -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> TTS | Home</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<style>
    body{
        background-image:url('bg.jpg');
        /* background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover; */
    }
</style>
<body class="hold-transition sidebar-mini layout-fixed bg-light">
<div class="wrapper">



  <nav class="navbar navbar-expand navbar-dark bg-lightblue">

    <h3 class="navbar-brand text-light text-bold"><img src="ngao.png" style="width: 40px;height:35px;"></h3>
    <a href="" class="navbar-brand"><i class="text-bold"> T.T.S</i></a>
    <ul class="navbar-nav mx-auto">

    <li class="nav-item">
      <a href="" class="nav-link">Contact Us</a>
    </li>
    <li class="nav-item">
    <a href="" class="nav-link">|</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">Frequently Asked Questions</a>
    </li>
    <li class="nav-item">
    <a href="" class="nav-link">|</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">Complaints</a>
    </li>
    <li class="nav-item">
    <a href="" class="nav-link">|</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">Request Servant Account</a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


     <a href="index.php" class="mx-2 p-2 text-light" style="border: 1px solid white;">SWH</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <div class="row">

    <!-- Guiding information -->
    <div class="col-md-7  p-3 mt-2">
        <div class="card bg-lightblue">
            <h4 class="text-center ">Welcome To Teachers Transfer System</h4>
           
        </div>
        <div class="col-md-11 mx-auto">
              <h5 class="text-bold">In This System you can do the following:</h5>
              <hr>
              <p><i class="fas fa-chevron-circle-right text-lightblue"></i> Get Information About Regions with Transfer Posts</p>
              <p><i class="fas fa-chevron-circle-right text-lightblue"></i> Request For Transfer</p>
              <p><i class="fas fa-chevron-circle-right text-lightblue"></i> Getting Information About Transfers</p>
              <p><i class="fas fa-chevron-circle-right text-lightblue"></i> Download the Transfer letter</p>
              <p><i class="fas fa-chevron-circle-right text-lightblue"></i> Request an exchange </p>
            
        </div>

        <div class="mt-4 col-md-11 mx-auto">
          <h6>
            <a href="" class="text-lightblue"><i class="fa fa-file-pdf text-danger"></i> Information on How to Use the system</a>
            
          </h6>
        </div>

    </div>
      <!-- login form -->
      <div class="col-md-5 p-4">
        <div class="card mt-2 mx-auto">
            <div class="card-body">
              <form action="config/authentication.php" method="post" class="form-group">
                  <div class="form-group">
                      <label for="email" class="text-lightblue"><i class="fa fa-envelope"></i> Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                  </div>
                  <div class="form-group">
                      <label for="password" class="text-lightblue"><i class="fa fa-lock"></i> Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                  </div>
            
            </div>
                  <!-- Login failure message -->
                  <?php
                          if (isset($_GET["fail"])){
                      ?>
                          <p class="btn btn-danger col-md-11 mx-auto disabled">Wrong Password or Email <a href="index.php" class="float-right"><i class="fa fa-times text-light"></i></a></p>
                      <?php     
                        }

                    ?>
            <div class="card-footer">
              <div class="form-group">
                <button type="submit" name="english" class="btn bg-lightblue btn-block">Login <i class="fas fa-sign-in-alt"></i></button>
 
              </div>
            </div>
            </form>
        </div>

    </div>



  </div>

</div>

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<footer class="bg-dark fixed-bottom text-center">
    <br>
    <strong>Copyright &copy; 2021/2022 <a href="" class="text-lightblue">TazarChriss</a>.</strong>
    All rights reserved.
    <div class="mt-4">
        <h1></h1>
    </div>
  </footer>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
