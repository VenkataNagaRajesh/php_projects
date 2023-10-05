<?php 

include "connect.php";


if(isset($_POST['a_Id']) && isset($_POST['level']))
{
    $id=$_POST['a_Id'];
    if($_POST['level']==1)
    $sql="SELECT Answer FROM `answer` WHERE Q_id=".$id." and level=1";
    else
    $sql="SELECT Answer FROM `answer` WHERE Q_id=".$id." and level=2";
    #echo $sql;exit();
    $query=mysqli_query($conn,$sql);
    $res=array();
    while($row=mysqli_fetch_assoc($query))
      $res[]=$row;

#print_r($res);exit();
 echo json_encode($res);
    
}
else{

    echo $_POST['a_Id']."   ".$_POST['level'];
}


?>