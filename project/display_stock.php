<html>


<head>
	

<script>

     $(document).ready(function() {
    var table = $('#table_id').DataTable({

dom: 'Blfrtp',
pageLength: 500,
// lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
]

});



}
 );

</script>
</head>
<body>
     <div>
<?php if(isset($_POST['displayData']))
{
     $table='
<table id="table_id" class="Table">
      <thead>
        <tr>
               <th style="display:hidden;"></th>
              <th scope="col">Id</th>
              <th scope="col">Item name</th>
              <th scope="col">Item type</th>
              <th scope="col">Item cost</th>
              <th scope="col">Manufactured date</th>
              <th scope="col">Avaible stock</th>
              <th scope="col">Bill no</th>
              <th scope="col">Vendor</th>
              <th scope="col">New stock</th>
              <th scope="col">Total stock</th>
              <th scope="col">Previous stock date</th>
              <th scope="col">New stock date</th>
              <th scope="col">Item expire date</th>
              <th >Action</th>
            

        </tr>
      </thead>
      <tbody>
        
         ';
include "connect.php";
$id=1;
$sql="SELECT * FROM `STOCK`";
$res=mysqli_query($conn,$sql);
;


#$row=mysqli_fetch_assoc($res);
#print_r($row);exit();

          while($row=mysqli_fetch_assoc($res))
          {  
                    $i=$row['id'];
                    $item_name=$row['item_name'];
                    $table.=
                    '<tr><td><input type="checkbox" value="'.$i.'" id="check"></td><td>'.$id.'</td>
                    <td>'.$row['item_name'].'</td>
                    <td>'.$row['item_type'].'</td>
                    <td>'.$row['item_cost'].'</td>
                    <td>'.$row['Manufactured_date'].'</td> 
                    <td>'.$row['avaible_stock'].'</td> 
                    <td>'.$row['bill_no'].'</td>
                    <td>'.$row['vendor'].'</td>  
                    <td>'.$row['new_stock'].'</td> 
                    <td>'.$row['total_stock'].'</td>  
                    <td>'.$row['prev_stock_date'].'</td>  
                    <td>'.$row['new_stock_date'].'</td> 
                    <td>'.$row['item_expire_date'].'</td>
                    <td><a  class="fa fa-edit" id="Edit" onclick="get_stock('.$i.')" style="cursor:pointer;"></a>
                     <a  class="fa fa-trash" id="Edit" onclick="del_stock('.$i.')" style="cursor:pointer;"></a>
                     <a  class="fa fa-eye" id="Edit" target="_blank" href="stock_in_detailed.php?item_name='.$item_name.'" style="cursor:pointer;text-decoration:none;"></a>
                    </td>
                    </tr>
                    ';
                    $id++;
          }
          #$table="<tr><td>".$row['item_name']."</td><td>".$row['item_name']."</td><td>".$row['item_cost']."</td><td>".$row['Manufactured_date']."</td></tr>";
          $table.='</table>';



echo $table;
}


?>
</div>

</div>
<div>
 
</body>