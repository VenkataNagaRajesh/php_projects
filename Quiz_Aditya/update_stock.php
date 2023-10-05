
<?php
include "connect.php";





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

            $query="UPDATE `STOCK` SET `item_name`='$Item_Name',`item_type`='$Item_type',`item_cost`= '$Item_cost',
                    `Manufactured_date`='$Manufactured_date',`avaible_stock`='$Availble_stock', `bill_no`='$Bill_no',
                    `vendor`='$Vendor',`new_stock`='$New_stock',`total_stock`='$Total_stock',`prev_stock_date`='$Previous_stock_date',
                    `new_stock_date`='$New_stock_date',`item_expire_date`='$Item_expire_date'
                     WHERE `id`='$id'";
           #
           
          # echo $query;exit();
           $up_result=mysqli_query($conn,$query);
           if($up_result)
           {
             echo "success";
           }
           else
             echo mysqli_error($conn);
    


}
 }
else{
    echo "item not availble";
}
?>


