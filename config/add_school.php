<!-- This page performs the operation of adding a school in a district -->
<?php

require_once('connection.php');

if(isset($_POST['add']))
{
    $sch_name=$_POST['sch_name'];
    $sch_district=$_POST['sch_district'];
    $box=$_POST['box'];
    $tel=$_POST['tel'];
    $level=$_POST['level'];
    $language=$_POST['language'];

    // Check if region exists
    $sql1="SELECT `sch_name` from school
    WHERE `sch_name`='$sch_name'
    AND `sch_district`='$sch_district'";
    $qry1=mysqli_query($conn,$sql1);

    if (mysqli_num_rows($qry1)>0) {
        
            header('Location:../admin/ongeza_shule.php?exist');
       
    }
    else{

        
    $qry="INSERT INTO `school`(`sch_name`, `sch_district`, `box`, `tel`,`level`) 
    VALUES('$sch_name','$sch_district','$box','$tel','$level')";
    $register=mysqli_query($conn,$qry);
   
    if(!$register){
       
        // header('Location:../admin/ongeza_schule.php?fail');
            die(mysqli_error($conn));
    }
    else{
  
            header('Location:../admin/shule.php?added');
    

    }


    }


}

?>
