<!-- This page performs the operation of adding a school in a district -->
<?php

require_once('connection.php');

if(isset($_POST['add']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $ref_no=$_POST['ref_no'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $dob=$_POST['dob'];
    $station=$_POST['station'];
    $level=$_POST['level'];
    $language=$_POST['language'];

    // Check if region exists
    $sql1="SELECT `ref_no` from user
    WHERE `ref_no`='$ref_no'
    AND `station`='$station'";
    $qry1=mysqli_query($conn,$sql1);

    if (mysqli_num_rows($qry1)>0) {
        
            header('Location:../admin/ongeza_mwalimu.php?exist');
       
    }
    else{

        
    $qry="INSERT INTO `user`(`fname`, `mname`, `lname`,`dob`, `pnumber`, `email`, `ref_no`,`role`,`station`, `password`, `status`) 
    VALUES('$fname','$mname','$lname','$dob', '$pnumber','$email', '$ref_no','6','$station','$password', 'Active')";
    $register=mysqli_query($conn,$qry);
   
    if(!$register){
       
        // header('Location:../admin/ongeza_schule.php?fail');
            die(mysqli_error($conn));
    }
    else{
  
            header('Location:../admin/walimu.php?added');
    

    }


    }


}

?>
