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
        <title>Computer Event</title>
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


@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}


.waviy {
  position: relative;
  -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
  font-size: 40px;
  text-align:center;
}
.waviy span {
  font-family: 'Alfa Slab One', cursive;
  position: relative;
  display: inline-block;
  color: blue;
  text-transform: uppercase;
  animation: waviy 1s infinite;
  animation-delay: calc(.1s * var(--i));
  
}
@keyframes waviy {
  0%,40%,100% {
    transform: translateY(0)
  }
  20% {
    transform: translateY(-20px)
  }
}








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
  $({ countNum: $('.doctor').html() }).animate({ countNum: 130 }, {
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
        $({ countNum: $('.patient').html() }).animate({ countNum: 25 }, {
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
 include("sidenav.php");
    include("connect.php");
    #    print_r($_SESSION);exit();

?>

        <body class="jumbotron">
    
                    <section id="team" class="pb-5">
                    <div class="container">
                    <center><h1 class="animate-charcter" style="font-family:elephant;-webkit-text-stroke: 2px black;font-size:62px;"> Aditya Degree Collge</h1></center>
                    <div class="waviy bb" id="box">
   <span style="--i:1;-webkit-text-stroke: 2px red;">C</span>
   <span style="--i:2;-webkit-text-stroke: 2px green;">o</span>
   <span style="--i:3;-webkit-text-stroke: 2px yellow;">m</span>
   <span style="--i:4;-webkit-text-stroke: 2px white;">p</span>
   <span style="--i:5;-webkit-text-stroke: 2px black;">u</span>
   <span style="--i:6;-webkit-text-stroke: 2px orange;">t</span>
   <span style="--i:7;-webkit-text-stroke: 2px white;">e</span>
   <span style="--i:8;-webkit-text-stroke: 2px white;">r</span>
   <span style="--i:9">&nbsp; </span>
   <span style="--i:1;-webkit-text-stroke: 2px white;">S</span>
   <span style="--i:2;-webkit-text-stroke: 2px white;">c</span>
   <span style="--i:3;-webkit-text-stroke: 2px white;">i</span>
   <span style="--i:4;-webkit-text-stroke: 2px white;">e</span>
   <span style="--i:5;-webkit-text-stroke: 2px white;">n</span>
   <span style="--i:6;-webkit-text-stroke: 2px white;">c</span>
   <span style="--i:7;-webkit-text-stroke: 2px white;">e</span>
   <span style="--i:8">&nbsp; </span>
   <span style="--i:9;-webkit-text-stroke: 2px white;">E</span>
   <span style="--i:1;-webkit-text-stroke: 2px white;">v</span>
   <span style="--i:2;-webkit-text-stroke: 2px white;">e</span>
   <span style="--i:3;-webkit-text-stroke: 2px white;">n</span>
   <span style="--i:4;-webkit-text-stroke: 2px white;">t</span>
  </div>

  <div class="container-fluid">
                    <div class="row"><br><br></div><br></br>
                        <div class="row">
                            <div class="col-md-1"> &nbsp;</div>
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-8 col-md-5">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://i2-prod.somersetlive.co.uk/incoming/article4358138.ece/ALTERNATES/s1200d/2_GettyImages-501830159.jpg" alt="card image"></p>
                                    <h2 class="card-title">Level 1</h2>
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
                                    <h3 class="card-title">Aditya Degree College</h3>  
                                    <h4 class="card-title">Quiz</h4>
                                    <p class="card-text">Here you can see the list of doctors in our hospital. Who are having 15+ years of exp in their specilization.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="doctos.php?level=1">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        </li>
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="doctors.php?level=1">
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
                        <div class="col-xs-12 col-sm-6 col-md-5">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://i.insider.com/5d42e0ce100a2402a63a98f6?width=700" alt="card image"></p>
                                    <h4 class="card-title">Level 2</h4>
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
                                    <h3 class="card-title">Aditya Degree College</h3>  
                                    <h4 class="card-title">Quiz</h4>
                                    <p class="card-text">Here you can see the list of doctors in our hospital. Who are having 15+ years of exp in their specilization.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="doctors.php?level=2">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        </li>
                                        <li class="list-inline-item">
                                        <a class="social-icon text-xs-center" href="doctors.php?level=2">
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

</div>
	</body>
</html>	

<?php } ?>  