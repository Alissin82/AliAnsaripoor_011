<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>سیستم مدیریت مدرسه</title>
   
   <!-- Font Awesome -->
   <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   </script>
</head>

<body style="height: 100vh;" class="d-flex justify-content-center align-items-center">
   <div class="card col-10 col-md-4">
      <div class="card-header text-center">
         <img src="asset\img\school_logo.png" alt="school_logo" width="200px">
      </div>
      <div class="card-body">
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="input-group mb-3">
               <span class="input-group-text fas fa-user"></span>
               <input name="username" type="text" class="form-control" placeholder="نام کاربری" value="<?php if(isset($_COOKIE["username_mohajer"])) { echo $_COOKIE["username_mohajer"]; } ?>">
            </div>
            <div class="input-group mb-3">
               <span class="input-group-text fas fa-user"></span>
               <input name="password" type="password" class="form-control" placeholder="رمز عبور" value="<?php if(isset($_COOKIE["password_mohajer"])) { echo $_COOKIE["password_mohajer"]; } ?>">
            </div>
            <div class="row">
               <div class="mb-3">
                  <div class="">
                     <input type="checkbox" name="rememberme">
                     <label for="rememberme">
                        مرا فراموش نکن
                     </label>
                  </div>
               </div>
               <div>
                  <button type="submit" class="btn btn-primary w-50">ورود</button>
               </div>
            </div>
         </form>
      </div>
      <?php
         if ($_SERVER['REQUEST_METHOD']=="POST") {
            include_once("asset/php/server.php");
            $username = $_POST['username'];
            $password = $_POST['password'];
            try {
               //get user data from database
               $conn = Connect();
               $stmt = $conn->prepare("SELECT * FROM employee WHERE username='$username' and password='$password'");
               $stmt->execute();
               $row = $stmt->fetch();
               session_start();
               
               //set cookie if remember me is checked, expire in 30 days
               if ($_POST['rememberme']) {
                  setcookie("username_mohajer", $username, time() + (86400 * 30), "/", "" , true , true ); // 86400 = 1 day
                  setcookie("password_mohajer", $password, time() + (86400 * 30), "/", "" , true , true ); // 86400 = 1 day
               }               

               //save user data for other pages
               $_SESSION['user'] = $row;

               $access_level = $row['access_level'];

               //exit the connection
               $conn = null;

               //redirect to appropriate dashboard
               switch ($access_level) {
                  case 5:case 4:case 3:case 2:case 1:
                     header("Location: admin/dashboard.php");
                  break;

                  case 0:
                     header("Location: student/dashboard.php");
                  break;
               }

               

            }
            catch(PDOException $e) {
               echo "Error: " . $e->getMessage();
            }
            
         }
      ?>
   </div>

</body>

</html>