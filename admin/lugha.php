<?php

session_start();
$id=$_SESSION['id'];

if ($_SESSION['role']!='1') {
  header('Location:../index.php');
}

else{
  include '../config/connection.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TTS | Ongeza Shule</title>
  <!-- start of admin css section -->
  <?php include 'include/admincss.php'; ?>
  <!-- end of admin css section -->

</head>

<body class="hold-transition sidebar-mini layout-fixed bg-light">

<!-- start of navbar section -->
<?php include("include/navbar1.php"); ?>
<!--  end of navbar section -->

<div class="content-wrapper">
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <h5 class="text-left  text-lightblue mx-2 mt-2"><i class="fa fa-globe"></i> Badilisha Lugha       </h5>

        <hr class="bg-lightblue">
        </div>
    </div>
</div>

  </section>
  <!-- Start of Add School Form -->
  <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-lightblue">
            </div>
            <!-- /.card-header -->
            <div class="card-body text-center">
                <h5>Je, Unataka kubadilisha Lugha Kutoka Kiswahili Kwenda Kingereza ?</h5>
            </div>
            <!-- /.card-body -->
               <!-- Register Button -->
               <div class="form-group card-footer">
                       <a href="home.php" class="btn btn-sm bg-lightblue col-md-3">Ndio</a> <a href="nyumbani.php" class="btn btn-sm btn-danger col-md-3 float-right">Hapana</a>
                    </div>
                </form>
          </div>
        </div>
          </div>
          </div>
    </section>
<!-- start of scripts section -->
  </div>
<?php include("include/adminscript.php"); ?>
<!-- end of scripts section -->

</body>
</html>

<?php

      }
    ?>
