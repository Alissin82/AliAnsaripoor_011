<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <?php include_once("../asset/includes/head.php"); ?>
  <title><?php title("ثبت نام"); ?></title>
  <!-- Including jQuery is required. -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <!-- Including our scripting file. -->
  <script type="text/javascript" src="js/livesearchajax.js"></script>
</head>

<body>
  <?php include_once("../asset/includes/header.php"); ?>
  <?php include_once("header.php"); ?>

  <?php include_once("../asset/php/server.php"); ?>

  <div class="container-fluid p-2">
    <div class="row">
      <form method='post'>
        <div class="input-group">
          <input type='text' name='studentsearch' id="search" placeholder='عبارت مورد نظر وارد کنید' />
          <a class='btn btn-primary' href='studentregister.php'>افزودن دانشجو</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Suggestions will be displayed in below div. -->
  <div class="container-fluid p-2" id="display">
    
  </div>

</body>

<script src="js/city.js"></script>

</html>