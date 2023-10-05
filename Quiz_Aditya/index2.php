<?php
include "connect.php";
$message="";
session_start();
$_SESSION['user']=NULL;
if(isset($_POST['submit']))
    {
      $email=$_POST['email'];
            $password=$_POST['password'];

            $query="SELECT *FROM `adv_crud` WHERE email='$email' and password='$password'";
           #echo $query;
           
            $result=mysqli_query($conn,$query);
    
            if(mysqli_num_rows($result)>0)
            {
              $row=mysqli_fetch_array($result);
            
             echo $user=$row['name'];
          # echo $user;
              if($user=="rajesh")
                     $_SESSION["user"]=$user;
              else if($user="ramya")
                      $_SESSION["user1"]=$user;
              #$_SESSION['']
              if(!isset($user))
              {
                $message="User name or password is Invalid";
              }
              if(!(isset($_SESSION["user"])) || $_SESSION['user']=="" || $_SESSION['user']==NULL)
              {
                header('location:logout.php');
              }
              else{
                echo $_SESSION['user']."ok";
                header('location:admin-dashboard.php');
              }
            }
            else{

              $message="User name or password is Invalid";
            }
    }
  

   
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
  body{
    background: url(../Quiz_Aditya/images/logo.png) no-repeat;
    background-size: cover;
  }
</style>

    <script>
      $(document).ready(function()
      {
        $("#lock").click(function()
        {
          var p=$('#exampleInputPassword1').attr('type');
          if(p=="password")
          {
            $(this).removeClass('fa fa-lock');
            $(this).addClass('fa fa-unlock');
            $('#exampleInputPassword1').attr('type','text');
          }
          else{ 
            $(this).removeClass('fa fa-unlock');
            $(this).addClass('fa fa-lock');
            $('#exampleInputPassword1').attr('type','password');
          }

        });
      })

    </script>
  </head>
  <body class="container my-5" >

  &nbsp;  &nbsp;
<br><br><br><br><br><br><br><br><br><br><br><br>

  <div class="col-12 col-xs-12  col-sm-6 d-flex justify-content-center  col-12 col-md-12 col-mb-12"style="font-family:Cambria;">

  <div class="card card-lg" style="width: 18rem;">

  <div class="card-header">
  <h5 class="text-center">Login form</h5>
</div>
  <div class="card-body">
    
  <form method="post">
            <div class="mb-3">
             
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" required name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <div class="input-group mb-3">
                  <span class="input-group-text"><i class="fa fa-lock" id="lock"></i></span>
                  <input type="password" class="form-control" name="password" required id="exampleInputPassword1">
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div style="float:right">
            <button type="submit" name="submit"class="btn btn-primary ">Submit</button>
            <!-- <a href="Signup.php" class="btn  btn-info" style="color:white;text-decoration:none;">Signup</a> -->
            </div>
            </form>
        
           <div class="text-danger"><?php if($message!="") { echo $message; } ?></div>
  </div>
</div>
</div>
    
  </body>
</html>