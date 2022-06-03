<!-- This file performs the user authentication function -->
<?php
 session_start();
require_once('connection.php');
    if(isset($_POST['english'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $qry="SELECT * FROM user where email='$email' and password='$password' limit 1 ";

        $login=mysqli_query($conn,$qry);

        if(!$login) 
        {
            echo mysqli_error($login);
        }
        
        else{
        $rows=mysqli_num_rows($login);
        if($rows==0){
            header('location:../english.php?fail');
           
        }
        else{
            $res=mysqli_fetch_array($login);
            $id=$res['id'];
            $fname=$res['fname'];
            $mname=$res['mname'];
            $lname=$res['lname'];
            $role=$res['role'];
            

            // session creation
            $_SESSION['id']=$id;
            $_SESSION['fname']=$fname;
            $_SESSION['mname']=$mname;
            $_SESSION['lname']=$lname;
            $_SESSION['role']=$role;
        
            if($role=='1')
            {
                header('Location:../admin/home.php');
            }
            else
            {
                header('Location:../staff.php');
            }
                
        
            
        }
           
        }
    }


    // For swahili
    if(isset($_POST['swahili'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $qry="SELECT * FROM user where email='$email' and password='$password' limit 1 ";

        $login=mysqli_query($conn,$qry);

        if(!$login) 
        {
            echo mysqli_error($login);
        }
        
        else{
        $rows=mysqli_num_rows($login);
        if($rows==0){
            header('location:../index.php?feli');
           
        }
        else{
            $res=mysqli_fetch_array($login);
            $id=$res['id'];
            $fname=$res['fname'];
            $mname=$res['mname'];
            $lname=$res['lname'];
            $role=$res['role'];
            

            // session creation
            $_SESSION['id']=$id;
            $_SESSION['fname']=$fname;
            $_SESSION['mname']=$mname;
            $_SESSION['lname']=$lname;
            $_SESSION['role']=$role;
        
            if($role=='1')
            {
                header('Location:../admin/nyumbani.php');
            }
            else
            {
                header('Location:../staff.php');
            }
                
        
            
        }
           
        }
    }
    ?>
