<html>


<head>
<script>
     $(document).ready(function() {
    var table = $('#table_id').DataTable();
    
}
 );

</script>

<?php
include "connect.php";
if(isset($_POST['del_id']))
{
    $id=$_POST['del_id'];

    $sql="DELETE FROM `STOCK` WHERE id=".$id;
    $query=mysqli_query($conn,$sql);
    echo $query;
    }
?>
</head>

</html>