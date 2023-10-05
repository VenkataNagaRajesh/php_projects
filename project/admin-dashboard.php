<?php
   session_start();
   if(!isset($_SESSION['user']))
   {
        header('location:index.php');
   }
   else{
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hospital Management</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
        <script src="/path/to/cdn/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.plugin.js"></script>    
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script src="/path/to/dist/jquery.countdown360.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
        <link rel="stylesheet" type="text/css "href="C:\xampp\htdocs\project\css\styles.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{
    window.history.forward(-1);
});

</script>
<!------ Include the above in your HEAD tag ---------->
        <style>
.wrapper
{
    width:1200px;;
    margin-left:0;
    margin-top:-50px;
}
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
<script>
  $({ countNum: $('.doctor').html() }).animate({ countNum: 40 }, {
            duration: 2000,
            easing: 'linear',
            step: function () {
            $('.doctor').html(Math.floor(this.countNum) + "+");
        },
        complete: function () {
            $('.doctor').html(this.countNum + "+");
            //alert('finished');
        }
        });
        $({ countNum: $('.patient').html() }).animate({ countNum: 800 }, {
            duration: 2000,
            easing: 'linear',
            step: function () {
            $('.patient').html(Math.floor(this.countNum) + "+");
        },
        complete: function () {
            $('.patient').html(this.countNum + "+");
            //alert('finished');
        }
        });
        $({ countNum: $('.room').html() }).animate({ countNum: 50 }, {
            duration: 2000,
            easing: 'linear',
            step: function () {
            $('.room').html(Math.floor(this.countNum) + "+");
        },
        complete: function () {
            $('.room').html(this.countNum + "+");
            //alert('finished');
        }
        });
        $({ countNum: $('.stock').html() }).animate({ countNum: 5000 }, {
            duration: 2000,
            easing: 'linear',
            step: function () {
            $('.stock').html(Math.floor(this.countNum) + "+");
        },
        complete: function () {
            $('.stock').html(this.countNum + "+");
            //alert('finished');
        }
        });


        var countdown = $("#countdown").countdown360({
    radius      : 60,
    seconds     : 100,
    fontColor   : '#FFFFFF',
    autostart   : false,
    onComplete  : function () { console.log('done') }
});
</script>

        <?php 
    include("../project/sidenav.php");
    include("connect.php");
    #    print_r($_SESSION);exit();

?>

        <body class="jumbotron">

                    <section id="team" class="pb-5">
                    <div class="container">
                    <center><h1 class="animate-charcter"> Viswa Hospital</h1></center>
                        <div class="row">
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="../project/images/doctors.webp" alt="card image"></p>
                                    <h4 class="card-title">Doctors</h4>
                                    <div class="item-animate">
                                                <h2 class="doctor">0</h2>
                                            </div>
                                     <!-- <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> -->
                                    </div>
                                </div>
                                </div>


                                <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                    <h3 class="card-title">Viswa hospital</h3>  
                                    <h6 class="card-title">Doctors</h6>
                                    <p class="card-text">Here you can see the list of doctors in our hospital. Who are having 15+ years of exp in their specilization.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="doctos.php">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        </li>
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="doctors.php">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </li>
                                     
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="../project/images/patient12.jpg" alt="card image"></p>
                                    <h4 class="card-title">Patients</h4>
                                    <div class="item-animate">
                                                <h2 class="patient">0</h2>
                                                <div id="countdown"></div>
                                            </div>
                                     <!-- <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> -->
                                    </div>
                                </div>
                                </div>


                                <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                    <h3 class="card-title">Viswa hospital</h3>  
                                    <h6 class="card-title">Patients</h6>
                                    <p class="card-text">Our Hospital will provie best treatment to the patinet in time. They can easily survive them selves after treatment.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center"href="add_patient.php">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        </li>
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center"  href="patients.php">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </li>
                                     
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="../project/images/hos_r.jpg" alt="card image"></p>
                                 
                                    <div class="item-animate">
                                    <h4 class="card-title">Rooms</h4>
                                                <h2 class="room">0</h2>
                                            </div>
                                     <!-- <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> -->
                                    </div>
                                </div>
                                </div>
                                <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                    <h3 class="card-title">Viswa hospital</h3>  
                                    <h6 class="card-title">Rooms</h6>
                                    <p class="card-text">Our Hospital provides best icu rooms with 24hrs related services and comfortable beds to the Patients.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="add_patient.php">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        </li>
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="patient.php">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </li>
                                     
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="../project/images/medcine.jpg" alt="card image"></p>
                                 
                                    <div class="item-animate">
                                    <h4 class="card-title">Stock</h4>
                                                <h2 class="stock">0</h2>
                                            </div>
                                     <!-- <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> -->
                                    </div>
                                </div>
                                </div>
                                <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                    <h3 class="card-title">Viswa hospital</h3>  
                                    <h6 class="card-title">Stock</h6>
                                    <p class="card-text">Our Hospital provides best icu rooms with 24hrs related services and comfortable beds to the Patients.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center"  href="stock.php">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        </li>
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center"  href="upload_stock.php">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        </li>
                                     
                                    </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        
                    </section>

	</body>
</html>	

<?php } ?>  