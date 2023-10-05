<?php
include('sidenav.php');
include("connect.php");

   session_start();
   if(!isset($_SESSION['user']))
   {
        header('location:index.php');
   }
   else{
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css" rel="stylsheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<style>

.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
  font-size:72px;

}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}

</style>
  </head>
  <body  >
   
    <div class="container">
    <center><h1 class="animate-charcter"> Viswa Hospital</h1></center>
           <div class="my-5">
                                      <table class="table table-hover table-bordered table-striped">
                                                        <thead>
                                                          <tr class="table-dark">
                                                            <th scope="col">Id</th>
                                                            <th scope="col">speciaization</th>
                                                            <th scope="col">Doctor name</th>
                                                            <th scope="col">Doctor adrees</th>
                                                            <th scope="col">Doctor contact no</th>
                                                            <th scope="col">Doctor email</th>
                                                            <th scope="col">Action</th>
                                                          </tr>
                                                        </thead>
                                        <?php
                                            $sql="SELECT *FROM doctors";
                                            $res=mysqli_query($conn,$sql);
                                          
                                            $count=1;
                                            $row=mysqli_fetch_assoc($res);
                                         #  echo mysqli_num_rows($res);exit();
                                           
                                           do {
                                            #  print_r($row); echo "<br>";#exit();
                                           echo   $id=$row['id'];#exit();
                                              ?>
                                                   
                                                <tr class="text-center">
                                                  <td><?php echo $count ?></td>
                                                  <td>  <?php echo $row['specilization'] ?>  </td>
                                                  <td>  <?php echo $row['doctorName'] ?>  </td>
                                                  <td>  <?php echo $row['address'] ?>  </td>
                                                  <td>  <?php echo $row['contactno'] ?>  </td>
                                                  <td>  <?php echo $row['docEmail'] ?>  </td>
                                                  <td> 
                                                        
                                                 <a href="" style="text-decoration:none;"> <i class="fa fa-edit"></i></a>
                                                 <a href="" onclick='deleteuser(<?php $id ?>)'>  <i class="fa fa-trash"></i></a>
                                                  </td>

                                                </tr>


                                            <?php $count++; } while($row=mysqli_fetch_assoc($res));
                                            
                                            
//exit();

                                      ?>
                                </table>
                                            </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  
  </body>
</html>

<?php } ?>