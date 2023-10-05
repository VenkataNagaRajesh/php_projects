<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hospital Management</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Slicebox - 3D Image Slider with Fallback" />
        <meta name="keywords" content="jquery, css3, 3d, webkit, fallback, slider, css3, 3d transforms, slices, rotate, box, automatic" />
		<meta name="author" content="Pedro Botelho for Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
        <style>

        </style>
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>


<style>
	.animate-charcter
{
	-webkit-text-stroke: 2px white;
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

.wrapper {
	position: relative;
	max-width: 90%;
	background:url('../quiz_aditya/images/123.gif																										') no-repeat;
  	background-size: cover;
	width: 100%;
	z-index: -1;
	height:50%;
	padding: 0 50px;
	margin: 0 auto;
}
.login
{
	color:white;
	font-weight:12px;
	text-shadow: 0px 3px 3px #fff;
	font-family: "Volkhov", serif;
	background:yellow;
	width:10%;
	padding:5px;
	padding-right:-100px;
	font-weight:bold;
	float:right;
	margin-right:-220px;
	padding-left:50px;
	border-radius:20px 0px 0px 20px;

}
.login:hover{
	/* margin-right:0px; */
	color:orange;
	font-family: "Volkhov", serif;
	font-weight:12px;
	z-index:2;
	padding:5px;
	padding-left:50px;
	border-radius:20px;
	margin-right:-150px;
	transition: all 0.2s ease;
}
.login1
{
	color:white;
	font-weight:12px;
	/* text-shadow: 0px 3px 3px #fff; */
	font-family: "Volkhov", serif;
	background:blue;
	width:10%;
	padding:5px;
	padding-right:-100px;
	font-weight:bold;
	float:right;
	margin-right:-220px;
	padding-left:50px;
	border-radius:20px 0px 0px 20px;

}
.login1:hover{
	/* margin-right:0px; */
	color:white;
	font-weight:12px;
	z-index:2;
	padding:5px;
	padding-left:50px;
	border-radius:20px;
	margin-right:-120px;
	transition: all 0.2s ease;
}
</style>
	</head>
	<body class="wrapper">
		<div style="border:2px black"> 
		
	<center><h1 class="animate-charcter"> Aditya Degree College</h1></center>
	<div  class="login"><a href="index2.php" style="text-decoration:none;">Log In</a></div>  <br><br>
	<div  class="login1" ><a href="index2.php" style="text-decoration:none;color:#fff;"><i class="fa fa-facebook-official" aria-hidden="true" style="color:white;"></i>facebook</a></div>  <br>
	
		<div class="container">
			</div>
			<div class="wrapper">
		
			
				<ul id="sb-slider" class="sb-slider" style="margin-top:-50px;">
				
					<li>
						<img src="images/chairman_sir.jpg" />
					</li>
					<li>
						<img src="images/suguna_mam.jpg"/>
						
					</li>
					<li>
					<img src="images/naidu_sir.png" />
					</li>
					<li>
					<img src="images/pradeep_sir.jpg" />
					</li>
					<li>
					<img src="images/sp_sir.jpg" />
					</li>
				</ul>

			
</div><!-- /wrapper -->

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<script type="text/javascript">$(function() {
				
				var Page = (function() {

	$(document).ready(function()
	{
		slicebox.play();
				return false;

	});
					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							

						};

						return { init : init };

				})();

				Page.init();

			});
</script>
	</body>
</html>	
