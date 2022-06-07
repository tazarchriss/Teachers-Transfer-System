<!-- This page performs the operation of adding a station -->
<?php

require_once('connection.php');

if(isset($_POST['add']))
{
    $st_name=$_POST['st_name'];
    $st_box=$_POST['st_box'];
    $st_tel=$_POST['st_tel'];
    $region=$_POST['region'];
    $st_email=$_POST['st_email'];
    $st_website=$_POST['st_website'];
    // $language=$_POST['language'];

    // Check if region exists
    $sql1="SELECT `st_name` from station
    WHERE `st_name`='$st_name'
    AND `region`='$region'";
    $qry1=mysqli_query($conn,$sql1);

    if (mysqli_num_rows($qry1)>0) {
        
            header('Location:../admin/ongeza_kituo.php?exist');
       
    }
    else{

        
    $qry="INSERT INTO `station`(`st_name`,`st_box`,`region`, `st_email`, `st_tel`,`st_website`) 
    VALUES('$st_name','$st_box','$region','$st_email','$st_tel','$st_website')";
    $register=mysqli_query($conn,$qry);
   
    if(!$register){
       
        // header('Location:../admin/ongeza_schule.php?fail');
            die(mysqli_error($conn));
    }
    else{
  
            header('Location:../admin/vituo.php?added');
    

    }


    }


}

?>
