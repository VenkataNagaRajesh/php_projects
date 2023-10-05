<?php 
include "connect.php";
include "sidenav.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
<?php
if($_REQUEST['id'])
{
    $p_id=$_REQUEST['id'];
       $sql="SELECT * FROM `patient_table` where p_id='$p_id'";

        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
?>




  <div class="container">
  <center><h1 class="animate-charcter text-center my-5"> Viswa Hospital</h1></center>
    <div class="text-center">
        <div style="border:solid-black 2px">
            <ul class="nav nav-tabs card-header-tabs" id="tabs">
                <li class="nav-item">
                    <a class="active nav-link active" href="#Basic_details" data-toggle="tab">Basic details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Lab_Reports" data-toggle="tab">Lab Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Pharma" data-toggle="tab">Pharma</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#Bill" data-toggle="tab">Bill</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="Basic_details">
                        

                
                
                </div>
                <div class="tab-pane" id="Lab_Reports">Lab Reports</div>
                <div class="tab-pane" id="Pharma">Pharma</div>
                <div class="tab-pane" id="Bill">Bill
                            
                
                
                
                
 <?php }?>               
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
