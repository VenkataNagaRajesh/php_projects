</html>

<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <style>

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
</html>

<?php
  

  include("connect.php");
echo "hai";
    if(isset($_POST['Id']) && isset($_POST['Item_Name']) && isset($_POST['Item_type']) && isset($_POST['Availble_stock']) && isset($_POST['Item_cost']) && isset($_POST['Manufactured_date'])
                               && isset($_POST['Bill_no']) && isset($_POST['Vendor']) && isset($_POST['New_stock']) && isset($_POST['Total_stock']) 
                                && isset($_POST['Previous_stock_date']) && isset($_POST['New_stock_date']) && isset($_POST['Item_expire_date']))
                                {
                                  $id=$_POST['Id'];
                                  $Item_Name=$_POST['Item_Name'];
                                  $Item_type=$_POST['Item_type'];
                                  $Availble_stock=$_POST['Availble_stock'];
                                  $Manufactured_date=date_format(date_create($_POST['Manufactured_date']));
                                  $Item_cost=$_POST['Item_cost'];
                                  $Bill_no=$_POST['Bill_no'];
                                  $Vendor=$_POST['Vendor'];
                                  $New_stock=$_POST['New_stock'];
                                  $Total_stock=$_POST['Total_stock'];
                                  $Previous_stock_date=date_format(date_create($_POST['Previous_stock_date']));
                                  $New_stock_date=date_format(date_create($_POST['New_stock_date']));
                                  $Item_expire_date=date_format(date_create($_POST['Item_expire_date']));

                                
                                 
                            if(!empty($Item_Name) || $Item_Name="" && !empty($Item_type) || $Item_type="" &&  !empty($Availble_stock) || $Availble_stock="" &&
                            !empty($Manufactured_date) || $Manufactured_date="" &&  !empty($Item_cost) || $Item_cost=""  && !empty($Bill_no) || $Bill_no="" &&
                            !empty($Vendor) || $Vendor="" &&  !empty($New_stock) || $New_stock=""  && !empty($Total_stock) || $Total_stock="" &&
                            !empty($Previous_stock_date) || $Previous_stock_date="" &&  !empty($New_stock_date) || $New_stock_date=""  
                            && !empty($Item_expire_date) || $Item_expire_date="" 
                            ){
                              

                              $sql="SELECT * FROM `stock` WHERE `Item_name`='$Item_Name'";
                             # echo $sql;exit();
                              $res= mysqli_query($conn,$sql);
                              if (mysqli_num_rows($res) > 0)
                              {
                                while($row=mysqli_fetch_assoc($res)) {
                                    if($row['item_name']==$Item_Name){
                                       $total_stock=$row['total_stock']+$New_stock;
                                       $query="UPDATE `STOCK` SET `item_name`='$Item_Name',`item_type`='$Item_type',`item_cost`= '$Item_cost',
                                       `Manufactured_date`='$Manufactured_date',`avaible_stock`='$Availble_stock', `bill_no`='$Bill_no',
                                       `vendor`='$Vendor',`new_stock`='$New_stock',`total_stock`='$Total_stock',`prev_stock_date`='$Previous_stock_date',
                                       `new_stock_date`='$New_stock_date',`item_expire_date`='$Item_expire_date'
                                        WHERE `id`='$id'";

                            $query1="INSERT into `stock_details` values('$item_name',(Select DATE_FORMAT(`new_stock_date`, '%Y') from stock WHERE ID=$id),(Select DATE_FORMAT(`new_stock_date`, '%M') from stock WHERE ID=$id))";
                                        mysqli_query($conn,$query1);
                                     #      echo $query;exit();
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
                                    else{
                                      echo mysqli_error();
                                    }

                                }
                              }
                              else{

                                $sql="SELECT `id` FROM `stock` ORDER BY `id` DESC LIMIT 1";
                                $res=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_assoc($res);
                                $id=$row['id'];
                                $id++;

                                    $query = "INSERT INTO `stock` (id,item_name,item_type,item_cost,Manufactured_date,avaible_stock,bill_no,vendor,new_stock,total_stock,prev_stock_date,new_stock_date,item_expire_date) 
                                    values('".$id."','".$_POST['Item_Name']."','".$_POST['Item_type']."','".$_POST['Item_cost']."','".$_POST['Manufactured_date']."','".$_POST['Availble_stock']."',
                                    '".$_POST['Bill_no']."','".$_POST['Vendor']."','".$_POST['New_stock']."','".$_POST['Total_stock'] ."',
                                    '".$_POST['Previous_stock_date']."','".$_POST['New_stock_date']."','".$_POST['Item_expire_date']."')";


                                # echo $query;exit();                            
                                $query1="INSERT into `stock_details` values('$item_name',(Select DATE_FORMAT(`new_stock_date`, '%Y') from stock WHERE ID=$id),(Select DATE_FORMAT(`new_stock_date`, '%m') from stock WHERE ID=$id),$total_stock)";
                                        mysqli_query($conn,$query1);
                                    if(mysqli_query($conn,$query))
                                    {
                                        echo '<script type="text/javascript">
                                        alert("Item added success fully");
                                        </script>';
                                    }
                                    else{
                                    echo '<script type="text/javascript">
                                    alert("Item doesn\'t added </a href=""> click here for details</a> success fully");
                                    </script>';
                                    echo mysqli_error($conn);

                                }
                            }
                          }
                            else{
                                echo 'pc shutdown';
                            }
        }
        else{
            echo "not availbel";
        }


?>

