<?php
    include "connect.php";

    echo $_POST['id'];exit();
    if(isset($_POST['id']))
    {
        $unique=$_POST['id'];
        $sql="DELETE FROM `doctors` WHERE id=$id";
        $res=mysqli_query($conn,$sql);
    }


?>