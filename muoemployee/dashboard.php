<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <?php include_once("..\asset\includes\head.php"); ?>
   <title><?php title(" - پنل مدیریت"); ?></title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="20">
   <?php include_once("..\asset\includes\header.php"); ?>
   <?php include_once("header.php"); ?>
   

   <?php include_once("..\asset\php\server.php"); ?>

   <section id="section1" class="container-fluid bg-success text-white p-3 px-0">
      <h3 class="px-4 sahelblack">دانشجو</h3>
      <?php 
         include_once("controllers\studentcontroller.php");
         $count_student = get_student_count();
      ?>

      <div class="w3-container px-0 row">
         <div class="w3-panel col text-center p-5">
            <h4 class="col-12">
               <a href="">
                  <span class="fas fa-th-list"></span>
                  مشاهده لیست
               </a>
            </h4>
         </div>
         <div class="w3-panel col text-center p-5">
            <h4 class="col-12">
               <span>
                  <span class="fas fa-users"></span>
                  <?php echo $count_student; ?>
                  نفر دانشجو
               </span>
            </h4>
         </div>
         <div class="w3-panel col text-center p-5">
            <h4 class="col-12">
               <a href="studentregister.php">
                  <span class="fas fa-user-plus"></span>
                  ثبت نام
               </a>
            </h4>
         </div>
      </div>

   </section>


</body>

</html>