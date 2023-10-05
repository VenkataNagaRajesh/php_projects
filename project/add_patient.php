<?php
 session_start();
 if(!isset($_SESSION['user']))    header('location:index.php');
 else{
include "connect.php";
if(!empty($_POST['Patient_Name']) && !empty($_POST['Adhar_number']) && !empty($_POST['Patient_ph_num']) 

&& !empty($_POST['Email_Id']) &&!empty($_POST['desease'])  &&!empty($_POST['Relation_with_Patient']) &&!empty($_POST['patient_type']) 
             &&!empty($_POST['care_of']) &&!empty($_POST['Age']) &&!empty($_POST['Gender'])
&&!empty($_POST['Gender']))
{

   $p_name=$_POST['Patient_Name'];
    $adhar=$_POST['Adhar_number'];
    $ph_no=$_POST['Patient_ph_num'];
    $age=$_POST['Age'];
    $Gender=$_POST['Gender'];
    $care_of=$_POST['care_of'];
  # echo $photo=$_FILES['photo'];
    $email=$_POST['Email_Id'];
    $Relation_with_Patient= $_POST['Relation_with_Patient'];
    $patient_admit_type=$_POST['desease'];
    $patient_type=$_POST['patient_type'];

//uploading photo
if(isset($_FILES['photo'])){$errors= array();

               $file_name = $_FILES['photo']['name'];
            
               $file_size = $_FILES['photo']['size'];
            
               $file_tmp = $_FILES['photo']['tmp_name'];
            
               $file_type = $_FILES['photo']['type'];
            
               $file_ext=explode('.',$_FILES['photo']['name']);

               $file_ext=strtolower(end($file_ext));
               echo $destination="images/patient_images/".$file_name;
               $extensions= array("jpeg","jpg","png");
               
               if(file_exists($destination))
               {
                  $errors[]="image already exists";
                  if(in_array($file_ext,$extensions)=== false){
                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                     if($file_size > 2097152) {
                        $errors[]='File size must be excately 2 MB';
                        if(empty($errors)==true) {
                           if(move_uploaded_file($file_tmp,"images/".$file_name))
                              echo "Success";
                           else echo $erros;
                        }else{
                           print_r($errors);
                        }  
                     }
                  }
               }
      } 
      $id=1;
       $sql="SELECT `p_id` FROM `patient_table` ORDER BY `p_id` DESC LIMIT 1";
      # echo $sql;
        $res=mysqli_query($conn,$sql);
      #  print_r($res);
       if($row=mysqli_fetch_assoc($res))
            $id=$row['id'];

         $id++;
         echo $id;
        $adhar_sub=substr($adhar,0,2);
         $name_sub=substr($p_name,0,2);
        $p_id="V005P".$id.$adhar_sub."".$name_sub;
 # echo $p_id;
      $sql="INSERT INTO `patient_table` values('$p_id','$p_name',$age,'$Gender','$care_of','$Relation_with_Patient',
                                       $adhar,$ph_no,'$destination','$email')";
      if(mysqli_query($conn,$sql))
         echo "Success fully added.";
      else{
         echo mysqli_error($conn);
      }
}
else{
echo "values miessed";
}
 }
?>