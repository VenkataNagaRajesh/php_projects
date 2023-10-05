<?php 
 session_start();
 if(!isset($_SESSION['user']))    header('location:index.php');
 else{
#include "sidenav.php";
include "connect.php";

$datapoints=array();
$item_name='rajesh';#$_REQUEST['item_name'];
$sql="SELECT stock,month,year FROM `stock_details` where item_name='$item_name'";
#echo $sql;
$res=mysqli_query($conn,$sql);
#print_r($res);


while($row = mysqli_fetch_array($res))
{        
/* Push the results in our array */
	$points = array("stock" =>  $row['stock'] ,"month" =>  $row['month']);

	array_push($datapoints, $points);
}
echo "<script> var my_2d=".json_encode($datapoints,JSON_NUMERIC_CHECK).
"</script>";
?>
</div><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
.jumbotron{
    margin-top:200px;
    margin-left:100px;
}

</style>
<!DOCTYPE HTML>
<html>
<head>




<script>window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "PHP Column Chart from Database"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc  
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}


</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>

</body>
</html>                              
<?php 







}?>
