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
#search:hover
{
 background-color:blue;
 color:white;
 height:50px;
 width:50px;

}
#question_number:hover{

  border-color :yellow;

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
  <body style="background:url('https://media4.giphy.com/media/v1.Y2lkPTc5MGI3NjExZmZkZGZhMGZhYmRkMWFhMjg5MDRlM2JiYmEzM2ViNDY1NzU3Yjc1ZSZjdD1n/xT9IgzoKnwFNmISR8I/giphy.gif');background-size:cover;" >
   
    <div class="container">
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <section id="team" class="pb-5">
                    <div class="container">
                    <center><h1 class="animate-charcter my-2" style="font-family:elephant;-webkit-text-stroke: 1px white"> Aditya Degree Collge</h1></center>
                    <div class="waviy bb" id="box">
   <span style="--i:1;-webkit-text-stroke: 2px white;">C</span>
   <span style="--i:2;-webkit-text-stroke: 2px white">o</span>
   <span style="--i:3;-webkit-text-stroke: 2px white">m</span>
   <span style="--i:4;-webkit-text-stroke: 2px white">p</span>
   <span style="--i:5;-webkit-text-stroke: 2px white">u</span>
   <span style="--i:6;-webkit-text-stroke: 2px white">t</span>
   <span style="--i:7;-webkit-text-stroke: 2px white">e</span>
   <span style="--i:8;-webkit-text-stroke: 2px white">r</span>
   <span style="--i:9;-webkit-text-stroke: 2px white">&nbsp; </span>
   <span style="--i:1;-webkit-text-stroke: 2px white">S</span>
   <span style="--i:2;-webkit-text-stroke: 2px white">c</span>
   <span style="--i:3;-webkit-text-stroke: 2px white">i</span>
   <span style="--i:4;-webkit-text-stroke: 2px white">e</span>
   <span style="--i:5;-webkit-text-stroke: 2px white">n</span>
   <span style="--i:6;-webkit-text-stroke: 2px white">c</span>
   <span style="--i:7;-webkit-text-stroke: 2px white">e</span>
   <span style="--i:8;-webkit-text-stroke: 2px white">&nbsp; </span>
   <span style="--i:9;-webkit-text-stroke: 2px white">E</span>
   <span style="--i:1;-webkit-text-stroke: 2px white">v</span>
   <span style="--i:2;-webkit-text-stroke: 2px white">e</span>
   <span style="--i:3;-webkit-text-stroke: 2px white">n</span>
   <span style="--i:4;-webkit-text-stroke: 2px white">t</span>
  </div>
<div style="background:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoeOOSOfog9c9gGWoHDDRBactC9HaUco261lMDEDoZlqOWGEgEJ49yD1aHS1SQNUtENfA&usqp=CAU');background-size:cover;background-repeat:no-repeat;width:100%;height:1800px;border-radius:10px;border-color:black 10px;margin-top:50px;">
  <div class="row">

    <div class="col-md-8 col-sm-8 col-lg-8 col-8" class="container" id="questions_div"
    
    style="font-weight:bold;margin-left:150px;margin-top:50px;font-size:32px;">
    
  </div>
  <div class="col-md-8 col-sm-8 col-lg-8 col-8" class="container" id="code_div"
    
    style="font-weight:bold;margin-left:150px;margin-top:50px;font-size:32px;margin-top:-30px;">
    
  </div>
  <div class="row">
  
  <div class="col-md-5 col-sm-5 col-lg-5 col-5">
    <input type="text" class="form-control form-control-sm fa fa-search"style="width:250px;border-radius:50px;margin-left:800px;" id="question_number" placeholder="enter the question number"></input>                            
    <input type="button" value="Go" id="search" class="btn-info btn btn-sm" style="margin-top:-60px;margin-left:1060px;border-radius:50px;">
</div>
</div>                                                          
  <br>
  <div class="col-md-9 col-sm-9 col-lg-9 col-9" class="container" id="options_div"
    
    style="font-weight:bold;margin-left:150px;margin-top:50px;font-size:22px;">
    
  </div>

</div >
   <div class="row my-5">
    <div class="col-md-2 col-sm-2 col-lg-2"></div>
<div class="col-md-4 col-sm-2 col-lg-4"><button class="btn btn-sm btn-info" id="previous" >Previous</div>
<div class="col-md-4 col-sm-2 col-lg-4"><button class="btn btn-sm btn-primary" id="answer_btn">Show Answer</button> </div>
<div class="col-md-2 col-sm-2 col-lg-2"><button class="btn btn-sm btn-info"id="next">Next</div>

          </div>
  <div style="margin-left:100px;font-family:times new roman; font-weight:bold;font-size:22px;">
 
    </div>
  <div class="container">
    <input type="hidden"id="question_id" value="1">
    <input type="hidden"id="level_id" value="<?php echo $_REQUEST['level']; ?>">
    <div id="answer_div" style="margin-left:100px;height:100px;width:1100px;border-radius:10px;padding-left:500px;padding-top:30px;font-family:times new roman; background-color:#7884e8; font-weight:bold;font-size:22px;">
        
    </div>
    <div>
    
</div>

          <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

$(document).ready(function()
{
  questions();
  options();
  $("#questions_div").css("color","#fff");
  $("#questions_div").css("text-stroke","2px red");
  
  $("#answer_div").hide();
});


$("#search").click(function()
{
      var q_no=$("#question_number").val();

      var level=$('#level_id').val();
  //alert(level);
  $.ajax({
                  url:"questions.php",
                  type:"post",
                  data:{
                        a_Id:q_no,
                        level:level
                  },
                  success:function(data,status)
                  {

                    const parsedData = $.parseJSON(data);
                    alert(parsedData[0].code);
                    $("#questions_div").html(parsedData[0].Q_id);
                    $("#questions_div").append(". "+parsedData[0].question);
                //    $("#code_div").append("<br><pre>"+parsedData[0].code+"</pre>").css("font-size","14px");
                    $("#questions_div").fadeIn("slow");
                    $("#question_number").val("");
                    $("#question_id").val(parsedData[0].Q_id);
                    options();
                  
                  },
                  error:function(data,status)
                  {
                        alert(error);
                  }
          });

});
function options()
{
  var a_Id=$('#question_id').val();
  var level=$('#level_id').val();
 // alert(a_Id+"                      "+level);
 $.ajax({
                 url:"options.php",
                 type:"post",
                 data:{
                       a_Id:a_Id,
                       level:level
                 },
                 success:function(data,status)
                 {
                //  alert(data);
                   const parsedData = $.parseJSON(data);
                   $("#options_div").html("A."+parsedData[0].Option1+" <br> "+"B."+parsedData[0].Option2+" <br> "+"C."+parsedData[0].Option3+"<br> "+"D."+parsedData[0].Option4+"    ");
                  $("#answer_div").hide();
                  
                    $('#question_id').val(parsedData[0].Q_id);
                    $("#options_div").show();
                 
                 },
                 error:function(data,status)
                 {
                       alert(error);
                 }
         });
}
function questions()
{
  var a_Id=$('#question_id').val();
  var level=$('#level_id').val();
  //alert(level);
  $.ajax({
                  url:"questions.php",
                  type:"post",
                  data:{
                        a_Id:a_Id,
                        level:level
                  },
                  success:function(data,status)
                  {

                    const parsedData = $.parseJSON(data);
                    $("#questions_div").append(parsedData[0].Q_id);
                    $("#questions_div").append(". "+parsedData[0].question);
                    if(parsedData[0].code!="")
                         $("#code_div").append("<br><pre>"+parsedData[0].code+"</pre>").css("font-size","25px");
                    $("#questions_div").fadeIn("slow");
                  
                  },
                  error:function(data,status)
                  {
                        alert(error);
                  }
          });
}

$( "#answer_btn" ).click(function(e)   
      {
        e.preventDefault();
        var a_Id=$('#question_id').val();
        var level=$('#level_id').val();;
         //alert(level);
      
          $.ajax({
                  url:"answer.php",
                  type:"post",
                  data:{
                        a_Id:a_Id,
                        level:level
                  },
                  success:function(data,status)
                  {
                   
                    const parsedData = $.parseJSON(data);
                    $("#answer_div").html(parsedData[0].Answer).css("color","#fff");
                    
                  $("#answer_div").fadeIn("slow");
                  
                  },
                  error:function(data,status)
                  {
                        alert(error);
                  }
          });
    
        
         // alert(Item_type);
      });


 $("#next").click(function(e)   
    {
        e.preventDefault();
        var a_Id=$('#question_id').val();
        var level=$('#level_id').val();;
           a_Id++;
           
          $.ajax({
                 url:'questions.php',
                  type:"post",
                  data:{
                        a_Id:a_Id,
                        level:level
                  },
                  success:function(data,status)
                  {
                   
                    const parsedData = $.parseJSON(data);
                    $("#questions_div").html(parsedData[0].Q_id);
                    $("#questions_div").append("."+parsedData[0].question); 
                         $("#code_div").html("<br><pre>"+parsedData[0].code+"</pre>").css("font-size","14px");
                     $("#answer_div").hide();
                    
                    
                     $('#question_id').val(parsedData[0].Q_id);
                     $("#options_div").hide();
                     options();
                  //  alert()
                  },
                  error:function(data,status)
                  {
                        alert(error);
                  }
         });
    
        
         //alert(Item_type);
      });

      $("#previous").click(function(e)   
    {
        e.preventDefault();
        var a_Id=$('#question_id').val();
         var level=1;
           a_Id--;
        
          $.ajax({
                 url:'questions.php',
                  type:"post",
                  data:{
                        a_Id:a_Id,
                        level:level
                  },
                  success:function(data,status)
                  {
                    
                    const parsedData = $.parseJSON(data);
                    $("#questions_div").html(parsedData[0].Q_id);
                    $("#questions_div").append("."+parsedData[0].question);
                     $("#answer_div").hide();
                     $('#question_id').val(parsedData[0].Q_id);
              //    alert(parsedData[0].Q_id);
                  //  alert()
                  },
                  error:function(data,status)
                  {
                        alert(error);
                  }
         });
    
        
         //alert(Item_type);
      });


</script>
  </body>
</html>

<?php } ?>