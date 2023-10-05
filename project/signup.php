<?php


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/styles.css"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

.imp{
    color:red;
    
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
<br><br><br>

  <div class="col  col-sm-4 d-flex justify-content-center col-sm-12 col-12 col-md-12 col-mb-12"style="font-family:Cambria;">

  <div class="card card-lg  bg-secondary text-light" style="width: 500px;font-weight:bold">

  <div class="card-header">
  <h5 class="text-center text-danger ">Login form</h5>
</div>
  <div class="card-body">
    
            <form action="login.php" method="post">
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username     </label> <span class="imp">*</span>
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" required name="fname" placeholder="First Name"  id="First_name" aria-describedby="emailHelp">
                                
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" required name="lname"  placeholder="Last Name"  id="First_name" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Email address</label><span class="imp">*</span>
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" required name="email"  id="exampleInputEmail1"placeholder="Email" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="mb-3">
                            
                                <label for="exampleInputPassword1" class="form-label">Password</label>  <span class="imp">*</span>

                                <label for="exampleInputPassword1" class="form-label" style="margin-left:200px;">Confirm Password</label>
                                <span class="imp">*</span>
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-lock" id="lock"></i></span>
                                <input type="password" class="form-control" name="password" required placeholder="Enter your  password" id="exampleInputPassword1">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                <span class="input-group-text"><i class="fa fa-lock" id="lock"></i></span>
                                <input type="password" class="form-control" name="cpassword" placeholder="Confirm your  password" required id="cexampleInputPassword1">
                                </div>
                            </div>
                            <div class="mb-3">
                            
                            
                                <div class="input-group mb-3">
                                
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label=">Mobile Number</label><span class="imp">*</span>
                                <label for="exampleInputPassword1" class="form-label" style="margin-left:180px;">Date of birth</label><span class="imp">*</span>
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-phone" id="lock"></i></span>
                                <input type="password" class="form-control" name="mobile" required placeholder="Enter your mobile number" id="mobilenumber">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <span class="input-group-text"><i class="fa fa-calendar" id="lock"></i></span>
                                <input type="date" class="form-control" name="mobile" required  id="dov" value="2018-07-22"
                                    min="1946-01-01" max="2022-12-12">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Location</label><span class="imp">*</span>
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="Location" required id="Location" placeholder="Enter your Location">
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">I have agree all the terms and conditions</label>
                            </div>
                            <div style="float:right">
                            <a href="reg.php" class="btn btn-primary" style="text-decoration:none;">next</a>
                            
                            </div>
            </form>
    
   
  </div>
</div>
</div>
    
  </body>
</html>