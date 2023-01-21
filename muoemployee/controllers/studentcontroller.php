<?php


function get_student_count(){
    try {
        //get user data from database
        $conn = Connect();
        $stmt = $conn->prepare("SELECT count(*) FROM student");
        $stmt->execute();
        $result = $stmt->fetchColumn();
           
        //exit the connection
        $conn = null;

     }
     catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
     }
     return $result;
}

if (isset($_POST['codemelli'])) {

   include("../../asset/php/server.php");
   $conn = Connect();

   include("uploadfilecontroller.php");

   $codemelli = $_POST['codemelli'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname']; 
   $mnumber = $_POST['mnumber'];
   $hnumber = $_POST['hnumber'];
   $email = $_POST['email'];

   $img = upload_file($_FILES["image"]["name"],"student_image",array($codemelli,$mnumber,$hnumber));

   $province = $_POST['province'];
   
   $city = $_POST['city'];

   include('../php/saveprovince_city.php');
   $city = saveprovince_city($city);

   $birthdate = $_POST['bd_year']."/".$_POST['bd_month']."/".$_POST['bd_day'];
   $haddress= $_POST['address'];

   try {
      
   $sql = "INSERT INTO student(codemelli, fname, lname, mnumber, hnumber, email, img, province, city, birthdate, haddress)
   VALUES ('$codemelli', '$fname', '$lname', '$mnumber', '$hnumber', '$email', '$img', '$province', '$city', '$birthdate', '$haddress')";

   // use exec() because no results are returned
   $conn->exec($sql);

   echo"<script>window.location.href = '../studentregister.php?result=success'</script>;";

   } catch(PDOException $e) {
      echo"<script>window.location.href = '../studentregister.php?result=error'</script>;";
   }
   $conn = null;
}

?>