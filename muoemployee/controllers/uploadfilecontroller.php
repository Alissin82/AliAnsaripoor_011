<?php

function upload_file($file,$dest,$name){

  //set file name
  $filename = $name[0].$name[1].$name[2];

  //get file extension
  $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

  //get the file location from temp to upload
  $tempname = $_FILES["image"]["tmp_name"];  

  //set destination location
  $folder = null;
  switch($dest){
    case "student_image":
      $folder = "../data/student/image/".$filename.".".$imageFileType;   
    break;

    case "employee_image":
      $folder = "../data/employee/image/".$filename.".".$imageFileType;   
    break;
  }

  //upload and return result
  if (move_uploaded_file($tempname, $folder)) {
    return $filename;
  }else{
    die("<p class='alert alert-danger'><strong>اخطار</strong> آپلود عکس به خطا برخورد</p>");
  }
}

?>