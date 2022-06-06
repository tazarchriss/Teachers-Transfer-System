
<?php

session_start();
$id=$_SESSION['id'];
$region=$_GET['id'];
if ($_SESSION['role']!='1') {
  header('Location:../index.php');
}

else{
  include '../config/connection.php';
  $sql="SELECT * FROM region,district
  WHERE region.reg_id='$region'
  AND district.region='$region'";
  $qry=mysqli_query($conn,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TTS | Wilaya</title>
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
    <h5 class="text-left  text-lightblue mx-2 mt-2"><i class="fas fa-map-marker-alt "></i> Wilaya Zote      <a class="float-right btn btn-small bg-lightblue" href="ongeza_wilaya.php?id=<?php echo $region; ?>"><i class="fa fa-plus"></i> Ongeza Wilaya</a></h5>

    <hr class="bg-lightblue">
    </div>
</div>
</div>
<!-- Successfully added region message -->
   <?php if (isset($_GET["added"])){
              ?>
            <p class="btn btn-success disabled col-md-12 mt-2 mx-auto" > Mkoa umefanikiwa kutunzwa! <a href="mikoa.php" class="float-right text-light text-center" style="font-size:18px;border:1px solid white;width:30px;"><i class="fa fa-times text-light"></i></a></p>
              <?php
      }
  ?>
</section>

<!-- Start of all regions table section -->
<section class="content mt-3">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
    <div class="card">
        <div class="card-header bg-lightblue">
        
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                 <?php

                if (mysqli_num_rows($qry) == 0){


                ?>
               <p class="text-danger text-center">Samahani Hamna Wilaya iliyosajiliwa Kwenye huu Mkoa!</p>

                <?php

                }

                else{

                  ?>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>SN</th>
              <th>Jina La Wilaya</th>
        
              <th></th>

            </tr>
            </thead>
            <?php
                for ($i=1; $i<=mysqli_num_rows($qry); $i++){
                  $row = mysqli_fetch_array($qry);




              ?>
        <tr>
          <td>
            <?php echo $i; ?></td>
          <td>
            <?php echo $row['dist_name']; ?>
          </td>


          <td>
           
                  <a class="btn btn-block btn-sm bg-lightblue p-1" href="mkoa.php?id=<?php echo $row['reg_id'];?>">Angalia Halimashauri</i></a>
           
          </td>
        </tr>
        <?php
          }
        }
          ?>
          </tbody>
          </table>
        </div>
        <!-- /.card-body -->
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
