<!-- This page performs the operation of adding a district in a region -->
<?php

require_once('connection.php');

if(isset($_POST['add']))
{
    $dist_name=$_POST['dist_name'];
    $region=$_POST['region'];
    $language=$_POST['language'];

    // Check if region exists
    $sql1="SELECT `dist_name` from district 
    WHERE `dist_name`='$dist_name'
    AND `region`='$region'";
    $qry1=mysqli_query($conn,$sql1);

    if (mysqli_num_rows($qry1)>0) {
        
            header('Location:../admin/ongeza_wilaya.php?id='.$region);
       
    }
    else{

        
    $qry="INSERT INTO `district`(`dist_name`,`region`) VALUES ('$dist_name','$region')";
    $register=mysqli_query($conn,$qry);
   
    if(!$register){
       
        header('Location:../admin/ongeza_wilaya.php?id='.$region);
   
    }
    else{
  
            header('Location:../admin/mkoa.php?id='.$region);
    

    }


    }


}

?>
