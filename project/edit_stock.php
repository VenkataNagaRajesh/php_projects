
<?php
include "connect.php";
if(isset($_POST['edit_id']))
{
    $id=$_POST['edit_id'];

    $sql="SELECT * FROM `STOCK` WHERE id=".$id;
    $query=mysqli_query($conn,$sql);
    $res=array();
    
    while($row=mysqli_fetch_assoc($query))
    {
        $res[]=$row;
    }
  #  $res['status']="ok";
 echo json_encode($res);
    
}
else if(isset($_POST['value'])){
  
     $item_name=$_POST['value'];

        
        $sql="SELECT * FROM `STOCK` WHERE item_name='$item_name'";
        $query1=mysqli_query($conn,$sql);

        $res=array();
        
        while($row=mysqli_fetch_assoc($query1))
        {
            $res[]=$row;
        }
      #  $res['status']="ok";
     echo json_encode($res);

    }
else{
    echo "error";
}
?>


