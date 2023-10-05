<?php

include "connect.php";

if(isset($_POST['Category']))

{
    $res_data=array();
    $Category=$_POST['Category'];
  
    $sql="SELECT * FROM `STAFF` WHERE  Category='$Category'  GROUP BY Designation";
  #  echo $sql;exit();
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res))
        $res_data[]=$row;

    #  print_r($res_data);
    echo json_encode($res_data);
    
}
else if(isset($_POST['designation']))

{

    $designation=$_POST['designation'];

    $sql="SELECT Emp_Id,Emp_name,Gender,Designation,Category,ph_no,email FROM `STAFF` WHERE Emp_Type='$designation'";
  # echo $sql;exit();
    $res=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($res))
        $res_data=$row;

   # echo"here";print_r($res_data);
echo json_encode($res_data);
    
}
else{
    echo "sotty";
}









?>