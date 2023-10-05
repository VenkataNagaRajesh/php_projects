
<?php
include "connect.php";
if(isset($_POST['a_Id']) && isset($_POST['level']))
{
  $i=$_POST['a_Id'];
  $j=$_POST['level'];
  if($j==1)
    $query="select  Q_id,question,code from questions where `Q_id`=".$i." and `Level`=".$j;
                                    
  else
     $query="select  Q_id,question,code from questions where `Q_id`=".$i." and `Level`=".$j;
#echo $query;exit();
    $result=mysqli_query($conn,$query);
            if($result)
            {
                if(mysqli_num_rows($result)>0)
                {
                  $res=array();
                  while($row = mysqli_fetch_assoc($result)) {
                     $res[]=$row;
               
              }
              }
            }
            echo json_encode($res);
          }
                else
                {
                    $_SESSION['user']=1;
                   header('location:index.php');
                    echo"failed.....".$_SESSION['user'];

                }
?>