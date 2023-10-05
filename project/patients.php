<?php 
 session_start();
 if(!isset($_SESSION['user']))    header('location:index.php');
 else{
include "sidenav.php";
include "connect.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Patients</title>
      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
      </style>
  </head>
  <body>
  <div class="container"> 
    <div class="my-5 py-4">
        <div class="container-fluid">
        <div class="container my-5 wrapper" id="displayData">
        <div style="margin-left:300px;">
                    <a href="upload_stock.php" class="btn btn-success btn-sm " ><span class="fa fa-users"> </span> &nbsp; In/Out patients</a>
                    &nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" id="add" data-bs-target="#exampleModal"name="add">
                    <span class="fa fa-plus-circle"> </span>&nbsp;Add Patients
                </button>&nbsp; 
                    &nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary btn-sm" id="delete"><span class="fa fa-trash"> </span>&nbsp;Delete
                </button>
            </div>
    </div>
        </div>
        </div>
        <div><div id="test_patient_data"></div></div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow:scroll;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Add Patient</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <p id="msg"></p>
      <div class="modal-body">
          <form id="form_data" enctype="multipart/form-data">                
            <input type="hidden" id="Item_id">    
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Patient Name</label> <span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Patient_Name"  name="Patient_Name"required autocomplete="off">
                
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Adhar card number</label><span style="color:red;">*</span>
                    <input type="number" class="form-control" id="Adhar_number" name="Adhar_number" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Patient phone number</label><span style="color:red;">*</span>
                    <input type="number" class="form-control" id="Patient_ph_num"  name="Patient_ph_num" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Age </label><span style="color:red;">*</span>
                    <input type="number" class="form-control" id="Age"  name="Age" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Care of </label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="C/o"  name="care_of" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                <label class="form-check-label" for="exampleRadios2"> Gender </label>
                  </div>
                  <div class="mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input class="form-check-input" type="radio" name="Gender" id="exampleRadios1" value="Male">
                <label class="form-check-label" for="exampleRadios2">
                  Male
                </label>   &nbsp;&nbsp;&nbsp;&nbsp;  <input class="form-check-input" type="radio" name="Gender" id="exampleRadios1" value="Fe male">
                <label class="form-check-label" for="exampleRadios2">
                  Fe male
                </label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-check-input" type="radio" name="Gender" id="exampleRadios1" value="Other">
                <label class="form-check-label" for="exampleRadios2">
                  Other
                </label>
                  </div>
                  <div class="input-group mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email Id </label><span style="color:red;">*</span>
                </div>
                <div class="input-group mb-3">
                            <input type="text" class="form-control" id="Email_Id"  name="Email_Id"required autocomplete="off">
                            
                    </div>

                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Relation with Patient</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Email_Id" name="Relation_with_Patient" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <select class="form-select" aria-label="Default select example" id="patient_type"  name="patient_type">
                        <option selected>Admit Type</option>
                        <option value="Emergency" name="Patient_ph_num" >Emergency</option>
                        <option value="Regular checkup" name="Patient_ph_num" >Regular checkup</option>
                        <option value="First timevisit" name="Patient_ph_num">First time visit</option>
                    </select>
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Problem</label><span style="color:red;">*</span>
                    <input type="text area" rows="106" cols="50" class="form-control" id="desease" name="desease" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Photo</label><span style="color:red;">*</span>
                    <input type="file" class="form-control" id="photo" name="photo" required autocomplete="off">
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="save"name="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet"/>
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  

    <script>

$(document).ready(function()
{
  displayData();

});

   //Adding a submit function to the form 
$('#form_data').submit(function(e){
 e.preventDefault();
 $.ajax({
 url: 'add_patient.php',
 type: "POST",
 data: new FormData(this),
 contentType: false,
 cache: false,
 processData: false,
 success: function(data,status){
      displayData();
      $("#patient_table_id").ajax.reload();


 },
 error: function(){}
 });
});
        
     
    function displayData()
    {
      var displayData="true";
      $.ajax({
          url:"display_patients.php",
          type:"post",
          data:{displayData:displayData},
          success:function(data,status)
          {
            $("#test_patient_data").html(data);
          }

      });
    }



    </script>
  </body>
</html>

<?php } ?>
