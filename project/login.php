<?php
include "connect.php";

    if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query="SELECT *FROM `adv_crud` WHERE email='$email' and password='$password'";
          //  echo $query;
            $result=mysqli_query($conn,$query);
            session_start();
                    if($result)
                    {
                        if(mysqli_num_rows($result)>0)
                        {

                            //header('location:admin-dashboard.php');
                        }
                        else
                        {
                            $_SESSION['user']=1;
                           header('location:index.php');
                            echo"failed".$_SESSION['user'];

                        }
                    }
                    else{
                        $_SESSION['user']=0;
                        header('location:index.php');
                    }
    }
    else{
        header('location:index.php');
    }
   session_abort();

?>
