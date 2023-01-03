<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>سیستم مدیریت مدرسه</title>
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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

   <div class="card">

      <div class="card-header text-center">
         <img src="asset\img\school_logo.png" alt="school_logo" width="200px">
      </div>

      <div class="card-body">
         <form action="" method="post">
            <div class="input-group mb-3">
               <span class="input-group-text fas fa-user"></span>
               <input type="text" class="form-control" placeholder="نام کاربری">
            </div>

            <div class="input-group mb-3">
               <span class="input-group-text fas fa-user"></span>
               <input type="text" class="form-control" placeholder="رمز عبور">
            </div>

            <div class="row">
               <div class="mb-3">
                  <div class="">
                     <input type="checkbox" id="remember">
                     <label for="remember">
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

   </div>
   <!--<div >
         <div class="card card-outline card-primary">
            <div class="card-header text-center">
               <a href="login.php" class="brand-link">
               <img src="asset/img/logo1.png" alt="DSMS Logo" width="200">
               </a>
            </div>
            <div class="card-body">
               <form action="admin" method="post">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control" placeholder="Username">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-envelope"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="icheck-primary">
                           <input type="checkbox" id="remember">
                           <label for="remember">
                           Remember Me
                           </label>
                        </div>
                     </div>
                     <div class="col-12">
                        <button type="submit" class="btn btn-info btn-block">Sign In</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div> -->
</body>

</html>