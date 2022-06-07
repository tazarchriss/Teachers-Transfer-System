<!-- This page performs the operation of adding a region -->
<?php

require_once('connection.php');

if(isset($_POST['add']))
{
    $rname=$_POST['rname'];
    $language=$_POST['language'];

    // Check if region exists
    $sql1="select `rname` from region where `rname`='$rname'";
    $qry1=mysqli_query($conn,$sql1);

    if (mysqli_num_rows($qry1)>0) {
        
            header('Location:../admin/ongeza_mkoa.php?exist');
       
    }
    else{

        
    $qry="INSERT INTO `region`(`rname`) VALUES ('$rname')";
    $register=mysqli_query($conn,$qry);
   
    if(!$register){
       
            header('Location:../admin/ongeza_mkoa.php?fail');
   
    }
    else{
  
            header('Location:../admin/mikoa.php?added');
    

    }


    }


}

?>
