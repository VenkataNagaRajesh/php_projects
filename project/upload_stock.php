<?php  include "sidenav.php";?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Viswa hospitals</title>
    <style>
.msg{

    background-color:#eb7f73;
    border-color:#70524f;
    margin:50px;
    padding:20px;
    padding-left:10px;
    text-align:center;
    border-radius:5px;
    color:white;
    font-family:vedana;
    font-weight:bold;
    position:relative;





}
    .wrapper{
        padding-left:0px;
        width:800px;
    }

    #success_tic .page-body{
  max-width:300px;
  background-color:#FFFFFF;
  margin:10% auto;
}
 #success_tic .page-body .head{
  text-align:center;
}
/* #success_tic .tic{
  font-size:186px;
} */
#success_tic .close{
      opacity: 1;
    position: absolute;
    right: 0px;
    font-size: 30px;
    padding: 3px 15px;
  margin-bottom: 10px;
}
#success_tic .checkmark-circle {
  width: 150px;
  height: 150px;
  position: relative;
  display: inline-block;
  vertical-align: top;
}
.checkmark-circle .background {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: #1ab394;
  position: absolute;
}
#success_tic .checkmark-circle .checkmark {
  border-radius: 5px;
}
#success_tic .checkmark-circle .checkmark.draw:after {
  -webkit-animation-delay: 300ms;
  -moz-animation-delay: 300ms;
  animation-delay: 300ms;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: ease;
  -moz-animation-timing-function: ease;
  animation-timing-function: ease;
  -webkit-animation-name: checkmark;
  -moz-animation-name: checkmark;
  animation-name: checkmark;
  -webkit-transform: scaleX(-1) rotate(135deg);
  -moz-transform: scaleX(-1) rotate(135deg);
  -ms-transform: scaleX(-1) rotate(135deg);
  -o-transform: scaleX(-1) rotate(135deg);
  transform: scaleX(-1) rotate(135deg);
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}
#success_tic .checkmark-circle .checkmark:after {
  opacity: 1;
  height: 75px;
  width: 37.5px;
  -webkit-transform-origin: left top;
  -moz-transform-origin: left top;
  -ms-transform-origin: left top;
  -o-transform-origin: left top;
  transform-origin: left top;
  border-right: 15px solid #fff;
  border-top: 15px solid #fff;
  border-radius: 2.5px !important;
  content: '';
  left: 35px;
  top: 80px;
  position: absolute;
}

@-webkit-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@-moz-keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}
@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 37.5px;
    opacity: 1;
  }
  40% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
  100% {
    height: 75px;
    width: 37.5px;
    opacity: 1;
  }
}


    </style>
  </head>
  <body>
  
  <div class="container my-5 wrapper">
  <form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label>Choose File</label>
			<input type="file" name="uploadFile" class="form-control" action="upload_stock" />
		</div>
        &nbsp;
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-success btn-sm">Upload</button>
      <a href="stock.php" class="btn btn-primary btn-sm">Back</a>
		</div>
	</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>


<?php
include "connect.php";

if(isset($_POST['submit'])) {
    if(isset($_FILES['uploadFile']['name']) && $_FILES['uploadFile']['name'] != "") {
       $allowedExtensions = array("xls","xlsx");
       $ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);
       
       if(in_array($ext, $allowedExtensions)) {
               // Uploaded file
              $file = "uploads/".$_FILES['uploadFile']['name'];
              $isUploaded = copy($_FILES['uploadFile']['tmp_name'], $file);
              // check uploaded file
              if($isUploaded) {
                   // Include PHPExcel files and database configuration file
                   require_once __DIR__ . '/vendor/autoload.php';
                   include(__DIR__ .'/vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php');
                   try {
                       // load uploaded file
                       $objPHPExcel = PHPExcel_IOFactory::load($file);
                   } catch (Exception $e) {
                        die('Error loading file "' . pathinfo($file, PATHINFO_BASENAME). '": ' . $e->getMessage());
                   }
                   
                   // Specify the excel sheet index
                   $sheet = $objPHPExcel->getSheet(0);
                   $total_rows = $sheet->getHighestRow();
                   $highestColumn      = $sheet->getHighestColumn();	
                   $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);		
                  # echo $total_rows;exit();
                   //	loop over the rows
                   for ($row = 1; $row <= $total_rows; ++ $row) {
                       for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                           $cell = $sheet->getCellByColumnAndRow($col, $row);
                           $val = $cell->getValue();
                           $records[$row][$col] = $val;
                       }
                   }
                   foreach($records as $row){
                    $id = isset($row[0]) ? $row[0] : '';
                    $item_name = isset($row[1]) ? $row[1] : '';
                    $item_type = isset($row[2]) ? $row[2] : '';
                    $item_cost = isset($row[3]) ? $row[3] : '';
                    $Manufactured_date = isset($row[4]) ? $row[4] : '';
                            $unix_date = ($Manufactured_date - 25569) * 86400;
                            $Manufactured_date = 25569 + ($unix_date / 86400);
                            $unix_date = ($Manufactured_date - 25569) * 86400;
                            $Manufactured_date = gmdate("Y-m-d", $unix_date);
                    $avaible_stock = isset($row[5]) ? $row[5] : '';
                    $bill_no = isset($row[6]) ? $row[6] : '';
                    $vendor = isset($row[7]) ? $row[7] : '';
                    $new_stock = isset($row[8]) ? $row[8] : '';
                    $total_stock = $avaible_stock+$new_stock;
                    $prev_stock_date = isset($row[10]) ? $row[10] : '';
                            $unix_date = ($prev_stock_date - 25569) * 86400;
                            $prev_stock_date = 25569 + ($unix_date / 86400);
                            $unix_date = ($prev_stock_date - 25569) * 86400;
                            $prev_stock_date = gmdate("Y-m-d", $unix_date);
                      $new_stock_date = isset($row[11]) ? $row[11] : '';
                            $unix_date = ($new_stock_date - 25569) * 86400;
                            $new_stock_date = 25569 + ($unix_date / 86400);
                            $unix_date = ($new_stock_date - 25569) * 86400;
                            $new_stock_date = gmdate("Y-m-d", $unix_date);
                    $item_expire_date = isset($row[12]) ? $row[12] : '';

                            $unix_date = ($item_expire_date - 25569) * 86400;
                            $item_expire_date = 25569 + ($unix_date / 86400);
                            $unix_date = ($item_expire_date - 25569) * 86400;
                            $item_expire_date = gmdate("Y-m-d", $unix_date);

                            $sql="SELECT * FROM `stock` WHERE `item_name`='$item_name' and 'bill_no'='$bill_no'";
                            $res= mysqli_query($conn,$sql);
                            if (mysqli_num_rows($res) > 0)
                            {
                              while($row=mysqli_fetch_assoc($res)) {
                                  if($row['item_name']==$item_name && $row['vendor']==$vendor){
                                     $total_stock=$row['total_stock']+$new_stock;
                                         $query="UPDATE `STOCK` SET `total_stock`='$total_stock' WHERE `item_name`='$item_name'";
                                        # echo $query;exit();
                                        $up_result=mysqli_query($conn,$query);
                                        if($up_result)
                                        {
                                          echo '<script type="text/javascript">
                                          $(document).ready(function(){
                                              $("#success_tick").modal("show");
                                          });
                                      </script>';
                                        }
                                        else
                                          echo mysqli_error($conn);
                                  }
                                echo $up_result;echo "<br><Br>";

                            }
                          }
                            else{
                            //  echo"hai";
                             // Insert into database
                             $query = "INSERT INTO stock (id,item_name,item_type,item_cost,Manufactured_date,avaible_stock,bill_no,vendor,new_stock,total_stock,prev_stock_date,new_stock_date,item_expire_date) 
                                     values('".$id."','".$item_name."','".$item_type."','".$item_cost."','".$Manufactured_date."','".$avaible_stock."','".$bill_no."','".$vendor."','".$new_stock."',
                                     '".$total_stock."','".$prev_stock_date."','".$new_stock_date."','".$item_expire_date."')";

                                     $query1="INSERT into `stock_details` values('$item_name',(Select DATE_FORMAT(`new_stock_date`, '%Y') from stock WHERE ID=$id),(Select DATE_FORMAT(`new_stock_date`, '%m') from stock WHERE ID=$id),$total_stock)";
                                     
                                   
                                 #   echo $query;exit();                            
                                 if(mysqli_query($conn,$query))
                                  {
                                    mysqli_query($conn,$query1);
                                      echo '<script type="text/javascript">
                                          $(document).ready(function(){
                                              $("#success_tic").modal("show");
                                          });
                                      </script>';
                                  }
                                  else{
                                      
                                      echo mysqli_error($conn);
                                  }

                                 
                            }
                               # mysqli_query($conn,$query);		
                            }
                             }
                             
                            unlink($file);
                        } else {
                            echo '<span class="msg py-4 my-5" style="background-color:#6ee0be>File not uploaded!</span>';
                        }
                } else {
                    echo '<span class="msg py-4 my-5">Please upload excel sheet.</span>';
                }
            } else {
                echo '<span class="msg py-4 my-5">Please upload excel file.</span>';
            }
         ?>
<html>

<head>

<body>

<html>
                        <body>
                        <div id="success_tic" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                <a class="close" href="#" data-dismiss="modal">&times;</a>
                                <div class="page-body">
                                <div class="head">  
                                <h3 style="margin-top:5px;">Data uploaded Successfully</h4>
                                </div>

                            <h1 style="text-align:center;"><div class="checkmark-circle">
                            <div class="background"></div>
                            <div class="checkmark draw"></div>
                            </div><h1>
                        <a href="stock.php" class="btn btn-success btn-sm" style="text-decoration:none;float:right">ok</a>
                            </div>
                            </div>
                                </div>

                            </div>


                </body>
                   </html>  
</body>
</head>