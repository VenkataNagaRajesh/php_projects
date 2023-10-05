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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css"/>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-json/2.6.0/jquery.json.min.js" integrity="sha512-QE2PMnVCunVgNeqNsmX6XX8mhHW+OnEhUhAWxlZT0o6GFBJfGRCfJ/Ut3HGnVKAxt8cArm7sEqhq2QdSF0R7VQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src= "https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>

    <title>Aditya Degree College</title>
    <style>

    .wrapper{
        padding-left:0px;
        width:800px;
    }
    </style>

  </head>
  <body>
  
    <div class="container my-5 wrapper" id="displayData">
        <a href="upload_stock.php" class="btn btn-success btn-sm " ><span class="fa fa-upload"> </span> &nbsp; Bulk Upload</a>
        &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" id="add" data-bs-target="#exampleModal"name="add">
        <span class="fa fa-plus-circle"> </span>&nbsp;Add single item
      </button>
      <button type="button" class="btn btn-primary btn-sm" id="delete"><span class="fa fa-trash"> </span>&nbsp;Delete
      </button>
    </div>
    <div class="container"><div id="testdata"></div></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow:scroll;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Add Single item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="add_stock">                
            <input type="hidden" id="Item_id">    
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Item Name</label> <span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Item_Name" required autocomplete="off">
                
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Item type</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Item_type" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Item cost</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Item_cost" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Availble stock</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Availble_stock" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Bill no</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Bill_no" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Vendor</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Vendor" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">New stock</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="New_stock" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Total stock</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="Total_stock" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Previous stock date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="Previous_stock_date" required autocomplete="off"value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Manufactured date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="Manufactured_date" required autocomplete="off"value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">New stock date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="New_stock_date" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Item expire date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="Item_expire_date" required autocomplete="off">
                  </div>
                  
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="save"name="submit" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="up_exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="overflow:scroll;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-primary" id="up_exampleModalLabel">Update item</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form id="add_stock">       
                <input type="hidden" id="up_id">             
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Item Name</label> <span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_Item_Name" required autocomplete="off">
                
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Item type</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_Item_type" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Item cost</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_Item_cost" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Availble stock</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_Availble_stock" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Bill no</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_Bill_no" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Vendor</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_Vendor" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">New stock</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_New_stock" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Total stock</label><span style="color:red;">*</span>
                    <input type="text" class="form-control" id="up_Total_stock" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Previous stock date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="up_Previous_stock_date" required autocomplete="off"value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Manufactured date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="up_Manufactured_date" required autocomplete="off"value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">New stock date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="up_New_stock_date" required autocomplete="off">
                  </div>
                  <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Item expire date</label><span style="color:red;">*</span>
                    <input type="date" class="form-control" id="up_Item_expire_date" required autocomplete="off">
                  </div>
                  
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="update"name="submit" class="btn btn-primary" data-bs-dismiss="modal">Update</button>
      </div>
    </div>
  </div>
</div>
  </body>

  <script>


$(document).ready(function()
{
  displayData();

});

$("#delete").on('click',function isCheckedById() {
    //alert(id);
    var checked = $("#table_id input[checkbox]:checked").val();
    alert(checked);

    if (checked == 0) {
        return false;
    } else {
        return true;
    }
})
var searchTimeout; //Timer to wait a little before fetching the data
$("#Item_Name").keyup(function() {
    searchKey = this.value;

    clearTimeout(searchTimeout);

    searchTimeout = setTimeout(function() {
        get_stock_details(searchKey);    
    }, 400); //If the key isn't pressed 400 ms, we fetch the data
});


function get_stock_details(searchKey) {
    $.post('edit_stock.php',
      {value: searchKey},
        function(data,status) {

          var data=data.replace("[","").replace("]","");
          var data=JSON.parse(data);
          console.log(data);
        //  alert(data.item_type);
                $("#Item_id").val(data.id);
                $("#Item_type").val(data.item_type);
                $("#Item_cost").val(data.item_cost);
                $("#Availble_stock").val(data.avaible_stock);
                $("#Total_stock").val(data.total_stock);
            
               
        });
    }

function del_stock(id)
{
  
    $.ajax(
    {
        url:"delete_stock.php",
        type:"POST",
        data:{
          del_id:id
        },
        success:function(data,status)
        {
          $("#table-id").DataTable().ajax.reload();
          displayData();
        }
  
    });
 
}
function get_stock(id)
{
  
 
  $.post("edit_stock.php",
  
          {
              edit_id:id
          },
          
                  function(data,status)
                  {
                    var data=data.replace("[","").replace("]","");

                    var data=JSON.parse(data);
                    $("#up_id").val(data.id);
                    $("#up_Item_Name").val(data.item_name);
                    $("#up_Item_type").val(data.item_type);
                $("#up_Item_cost").val(data.item_cost);
                $("#up_Availble_stock").val(data.avaible_stock);
                $("#up_Bill_no").val(data.bill_no);
                $("#up_Vendor").val(data.vendor);
                $("#up_New_stock").val(data.new_stock);
                $("#up_Total_stock").val(data.total_stock);
                $("#up_Previous_stock_date").val(data.prev_stock_date);
                $("#up_New_stock_date").val(data.new_stock_date);
                $("#up_Item_expire_date").val(data.item_expire_date);
                $("#up_Manufactured_date").val(data.Manufactured_date)
                    $("#table-id").DataTable().ajax.reload();
                   
                  }
          );
      $("#up_exampleModal").modal('show');
 
}


$("#update").on('click',function()
{
  var Id=$("#up_id").val();
  var Item_Name= $("#up_Item_Name").val();
  var Item_type=$("#up_Item_type").val();
  var Item_cost= $("#up_Item_cost").val();
  var Availble_stock=$("#up_Availble_stock").val();
  var Bill_no=$("#up_Bill_no").val();
  var Vendor=$("#up_Vendor").val();
  var New_stock=$("#up_New_stock").val();
  var Total_stock=$("#up_Total_stock").val();
  var Previous_stock_date=$("#up_Previous_stock_date").val();
  var New_stock_date =$("#up_New_stock_date").val();
  var Item_expire_date=$("#up_Item_expire_date").val();
  var Manufactured_date=$("#up_Manufactured_date").val();

    $.post("update_stock.php",
      {
                        Id:Id,
                        Item_Name:Item_Name,
                        Item_type:Item_type,
                        Item_cost:Item_cost,
                        Manufactured_date:Manufactured_date,
                        Availble_stock:Availble_stock,
                        Bill_no:Bill_no,
                        Vendor:Vendor,
                        New_stock:New_stock,
                        Total_stock:Total_stock,
                        Previous_stock_date:Previous_stock_date,
                        New_stock_date:New_stock_date,
                        Item_expire_date:Item_expire_date
                        

      },
      function(data,status)
      {
        alert(status);
        displayData();
      });
    });

$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
//     $('#New_stock_date').attr('min', maxDate);
 $('#Item_expire_date').attr('min', maxDate);
});


$( "#save" ).click(function(e)   
      {
        e.preventDefault();
        var Id=$('#Item_id').val();
          var Item_Name=$('#Item_Name').val();
          var Item_type=$('#Item_type').val();
          var Item_cost=$('#Item_cost').val();
          var Manufactured_date=$('#Manufactured_date').val();
          var Availble_stock=$('#Availble_stock').val();
          var Bill_no=$('#Bill_no').val();
          var Vendor=$('#Vendor').val();
          var New_stock=$('#New_stock').val(); 
          var Total_stock=$('#Total_stock').val();
          var Previous_stock_date=$('#Previous_stock_date').val();
          var New_stock_date=$('#New_stock_date').val();
          var Item_expire_date=$('#Item_expire_date').val();


          $.ajax({
                  url:"add_stock.php",
                  type:"post",
                  data:{
                        Id:Id,
                        Item_Name:Item_Name,
                        Item_type:Item_type,
                        Item_cost:Item_cost,
                        Manufactured_date:Manufactured_date,
                        Availble_stock:Availble_stock,
                        Bill_no:Bill_no,
                        Vendor:Vendor,
                        New_stock:New_stock,
                        Total_stock:Total_stock,
                        Previous_stock_date:Previous_stock_date,
                        New_stock_date:New_stock_date,
                        Item_expire_date:Item_expire_date
                  },
                  success:function(data,status)
                  {
                          $("#add_stock")[0].reset();
                        displayData();
                  },
                  error:function(data,status)
                  {
                        alert(error);
                  }
          });
        
         // alert(Item_type);
      });

function displayData()
{
  var displayData="true";
  $.ajax({
            url:"display_stock.php",
            type:"post",
            data:{
              displayData:displayData
            },
            success:function(data,status)
            {
                $("#testdata").html(data);
            }
        });
}


</script>

<?php
   }   ?>
            </div>
     <div>

</html>

