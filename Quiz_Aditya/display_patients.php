<html>
<script>

$("#patient_table_id").DataTable({
              dom:"l  Bfrtp",
              buttons:['excel','pdf','print','copy']
        });



</script>
</html>
<?php

if(isset($_POST['displayData']))
{
     $table='
<table id="patient_table_id">
      <thead>
        <tr>
      
              <th scope="col">Id</th>
              <th scope="col">Patient name</th>
              <th scope="col">Age</th>
              <th scope="col">Gender</th>
              <th scope="col">Adhar</th>
              <th scope="col">Contact Number</th>
              <th >Action</th>
        </tr>
      </thead>
      <tbody>';
include "connect.php";
$id=1;
$sql="SELECT * FROM `patient_table`";
$res=mysqli_query($conn,$sql);
;


#$row=mysqli_fetch_assoc($res);
#print_r($row);exit();

          while($row=mysqli_fetch_assoc($res))
          {  
                    $i=$row['p_id'];
                #$item_name=$row['item_name'];
                    $table.=
                    '<tr><td>'.$id.'</td>
                    <td>'.$row['p_name'].'</td>
                    <td>'.$row['Age'].'</td>
                    <td>'.$row['Gender'].'</td>
                    <td>'.$row['P_adhar'].'</td> 
                    <td>'.$row['p_ph_number'].'</td> 
                     <td><a  class="fa fa-eye" id="Edit" href="indivdual_patients.php?id='.$i.'" style="cursor:pointer;"></a>
                     </td>
                    
                    </td>
                    </tr>';
                    $id++;
          }
          $table.='</table>';



echo $table;
}


?>