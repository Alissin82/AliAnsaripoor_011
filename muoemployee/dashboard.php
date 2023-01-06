<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <?php include_once("../asset/includes/head.php"); ?>
   <title><?php title(" - پنل مدیریت"); ?></title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="20">
   <?php include_once("../asset/includes/header.php"); ?>
   <nav class="navbar navbar-expand-sm bg-secondary navbar-dark sticky-top">
      <div class="container-fluid">
         <a class="navbar-brand" href="dashboard.php">پنل مدیریت</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="#section1">Link</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#section2">Link</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#section3">Link</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Link</a></li>
                     <li><a class="dropdown-item" href="#">Another link</a></li>
                     <li><a class="dropdown-item" href="#">A third link</a></li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <section id="section1" class="container-fluid bg-success text-white">
      <h1>دانشجویان</h1>
      
   </section>


</body>

</html>