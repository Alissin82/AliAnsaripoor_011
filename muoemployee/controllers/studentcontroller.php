<?php


function get_student_count(){
    try {
        /*//get user data from database
        $conn = Connect();
        $stmt = $conn->prepare("SELECT count(*) FROM employee");
        $stmt->execute();
        $result = $stmt->fetchColumn();
           
        //exit the connection
        $conn = null;*/

        $result = rand(10,100);
     }
     catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
     }
     return $result;
}

if (isset($_POST['codemelli'])) {

   include("..\server.php");
   $conn = Connect();

   include("uploadfilecontroller.php");

   $codemelli = $_POST['codemelli'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname']; 
   $mnumber = $_POST['mnumber'];
   $hnumber = $_POST['hnumber'];
   $email = $_POST['email'];

   $img = upload_file($_FILES["image"]["name"],"student_image",array($codemelli,$fname,$lname));

   $province = $_POST['province'];
   
   $city = $_POST['city'];

   include('../php/saveprovince_city.php');
   $city = saveprovince_city($city);

   $birthdate = $_POST['bd_year']."/".$_POST['bd_month']."/".$_POST['bd_day'];
   $haddress= $_POST['address'];

   try {
   /*$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   // use exec() because no results are returned
   $conn->exec($sql);*/

   $sql = "INSERT INTO student(codemelli, fname, lname, mnumber, hnumber, email, img, province, city, birthdate, haddress)
   VALUES ($codemelli, $fname, $lname, $mnumber, $hnumber, $email, $img, $province, $city, $birthdate, $haddress, )";

   $result = mysqli_query($conn,$sql);

   if ($result) {
     echo "<p class='alert alert-success alert-dismissible fade show'><strong>پیام سیستم</strong> اطلاعات بیمار با موفقیت ثبت شد <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
   }
   else {
     echo "<p class='alert alert-danger alert-dismissible fade show'><strong>اخطار</strong> ثبت اطلاعات بیمار به مشکل برخورد <button type='button' class='close' data-dismiss='alert'>&times;</button></p>";
   }

   $_SESSION['success'] = array("student_register"); 
   header("Location : ../studentregister.php");

} catch(PDOException $e) {
   $error = "<p class='alert alert-danger'><strong>اخطار</strong> ثبت اطلاعات به خطا برخورد".$e->getMessage()."</p>";
   $_SESSION['error'] = array("student_register",$error); 
   header("Location : ../studentregister.php"); 
   }
   $conn = null;
}

?>