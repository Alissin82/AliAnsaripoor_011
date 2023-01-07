<?php

function upload_file($file,$dest){

  //set file name
  $filename = rand(100000,1000000);

  //get file extension
  $imageFileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));

  //get the file location from temp to upload
  $tempname = $_FILES["choosefile"]["tmp_name"];  

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
    return $folder;
  }else{
    return false;
  }
}

?>