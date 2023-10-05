<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
         header('location:index.php');
    }
    else{
     include "connect.php";
     include "sidenav.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hospital Management</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="author" content="Pedro Botelho for Codrops" />

		<link rel="shortcut icon" href="../favicon.ico"> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    

    
<div class="container my-5 wrapper">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
              <select class="form-select" id="medi_nonmedi">
                  <option value="select"  >All</option>
                  <?php 
                  $sql="SELECT DISTINCT(Category),Desg_Id FROM `staff`";
                  $res=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($res))
                  {
                    $Category=$row['Category'];
                    $Desg_Id=$row['Desg_Id'];
                ?>
                <option value="<?php echo $Category ?>"><?php echo $Category ?></option>
              
              <?php }

             ?>
                 
            </select>
        </div>
        <div class="col-md-2">
              <select class="form-select" id="staff_data">
                    <option value="0">...select...</option>
             
            </select>
        </div>
        
</div>

<br><br>
<div class="container">
      <table id="staff_table">
            <thead>
                  <td>Sl.no</td>
                  <td>Emp Id</td>
                  <td>Emp name</td>
                  <td>Gender</td>
                  <td>Designation</td>
                  <td>Category</td>
                  <td>Phone</td>
                  <td>Email</td>
                  <td>Action</td>

            </thead>
            <tbody>
              <?php

              $sql="SELECT Emp_Id,Emp_name,Gender,Designation,Category,ph_no,email from  `staff`";
              $res=mysqli_query($conn,$sql);
              ?>
               
                      <?php
                        $i=1;
                      while($row=mysqli_fetch_assoc($res)){
                            ?>
                             <tr>
                            <td><?php echo  $i; ?></td>
                            <td><?php echo $row['Emp_Id'] ?> </td>
                            <td><?php echo $row['Emp_name'] ?></td>
                            <td><?php echo $row['Gender'] ?></td>
                            <td><?php echo $row['Designation'] ?></td>
                            <td><?php echo $row['Category'] ?></td>
                            <td><?php echo $row['ph_no'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><a href="#" data-toggle="tooltip" title="Edit" data-placement="bottom"><span class="fa fa-edit"></span></a>
                              <a href="#" data-toggle="tooltip" title="Delete" id="delete_staff" data-placement="bottom"><span class="fa fa-trash"></span></a>
                        </td>
                            
                      </tr>
                     <?php  $i++; }  ?>
                 
              <?php
               ?>


</tbody>
    </table>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>



<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet">




<script>
//  $(function () {
//     $("#medi-nonmedi").change(function () {
        
//     });
// });

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
    $('#staff_table').DataTable({
        dom: 'lBfrtip',
        buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]

  });
});

$("#medi_nonmedi").on('change',function()
{
  var Category=$(this).val();
  $.ajax(
    {
      url:'staff_load.php',
      method:'post',
      data:{
        Category:Category
      },
      success:function(response){
        var response=JSON.parse(response);
          var len = response.length;
      
          $("#staff_data").empty();

         
          for( var i = 0; i<len; i++){
              var Emp_Id = response[i]['Emp_Type'];
              var Designation = response[i]['Designation'];
              console.log(Emp_Id+"  "+Designation);
              $("#staff_data").append("<option value='"+Emp_Id+"'>"+Designation+"</option>");
          }
      }
    }
  );
});

$("#staff_data").on('change',function()
{
  var designation=$(this).val();
  $.ajax(
    {
      url:'staff_load.php',
      method:'post',
      data:{
        designation:designation
      },
      success:function(data,status)
              {
                console.log(data);
                $('#staff_table').DataTable().destroy();
              var table=  $('#staff_table').DataTable({
                            data: data,
                           
                            columns: [
                                          {'data':null},
                                          { 'data': 'Emp_Id' },
                                          { 'data': 'Emp_name' },
                                          { 'data': 'Gender' },
                                           { 'data': 'Designation' },
                                          { 'data': 'Category' },
                                          { 'data': 'ph_no' },
                                          { 'data': 'email' },
                                           {data: null, 
        defaultContent: "<a href='#' class='btn btn-sm '><span class='fa fa-edit' style='color:blue'></span></a>"
    },
                                         
                                    ],
                                    "columnDefs": [   ////define column 1

                                      
                    {
                        "searchable": false,
                        "orderable": false,
                        "targets": 0
                    },
                ],
        });
         table.on('order.dt search.dt', function () {
                table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw(); 
      }

    });
});

// function displayStaff()
// {
  
// }
</script>
</body>
</html>	

<?php } ?>