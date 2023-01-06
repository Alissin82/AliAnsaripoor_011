<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <?php include_once("../asset/includes/head.php"); ?>
   <title><?php title(" - ثبت نام"); ?></title>
</head>

<body>
   <?php include_once("../asset/includes/header.php"); ?>
   <?php include_once("header.php"); ?>
   
   <?php include_once("../asset/php/server.php"); ?>

    <div class="container-fluid p-4">
        <form action="controllers/uploadfilecontroller.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="ارسال">
        </form>
    </div>
</body>

</html>