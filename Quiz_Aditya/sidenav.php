<?php 

// #session_start();
// if(!isset($_SESSION['user']))
// {
//      header('location:index.php');
// }
// else{
//  $_SESSION['user'];
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="../project/css/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<script>
const openSidebar = () => {
    $('#mySidebar').css('width','250px');
    $('#main').css('margin-left','250px');
    $('#btn').css('margin-left','-250px');
    // document.getElementById("mySidebar").style.width = "250px";
    // document.getElementById("main").style.marginLeft = "250px";
    // document.getElementById("btn").style.marginLeft = "0";
};

const closeSidebar = () => {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    $('#btn').css('margin-left','0px');
};
    </script>
<body>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="wrapper">
         <input type="checkbox" id="btn" hidden>
         <label for="btn" class="menu-btn">
         <i class="fas fa-bars"></i>
         <i class="fas fa-times"></i>
         </label>
         <nav id="sidebar">
            <div class="title" style="-webkit-text-stroke: 1px red;">
              Aditya Degree <br>College
            </div>
            <ul class="list-items">
               <li><a href="admin-dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
               <li><a href="staff.php"><i class="fas fa-users"></i>Staff</a></li>
               <li><a href="stock.php"><i class="fa fa-solid fa-image"></i>Gallery</a></li>
               <li><a href="#"><i class="fas fa-book"></i>Coding</a></li>
               <li><a href="#"><i class="fas fa-file"></i>Awards</a></li>
               <li><a href="#"><i class="fa fa-cash-register"></i>Placemetns</a></li>
               <!-- <li><a href="#"><i class="fas fa-globe-asia"></i>Duties</a></li>
               <li><a href="#"><i class="fas fa-file"></i>Attendance Report</a></li>
               <li><a href="patients.php"><i class="fas fa-search"></i>Patient Search</a></li> -->
               <li><a href="logout.php"><i class="fa fa-sign-out"></i>
                  Logout</a></li>
                  &nbsp;&nbsp;<br>
               <div class="icons">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
            </ul>
         </nav>
      </div>
     
   </body>
</html>
</body>
</html>
<!-- # -->