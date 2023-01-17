<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <?php include_once("../asset/includes/head.php"); ?>
    <title><?php title("ثبت نام"); ?></title>
</head>

<body>
    <?php include_once("../asset/includes/header.php"); ?>
    <?php include_once("header.php"); ?>

    <?php include_once("../asset/php/server.php"); ?>

    <div class="container-fluid p-4">
        <form action="controllers/studentcontroller.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md ">

                    <?php
                        if (isset($_GET['result'])) {
                            if ($_GET['result'] == "success") {
                                echo'
                                    <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <strong>موفقیت</strong> اطلاعات دانشجو با موفقیت ثبت شد
                                    </div>
                                ';

                            }
                            else
                            {
                                echo'
                                    <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <strong>اخطار</strong> ثبت اطلاعات به خطا برخورد"
                                    </div>
                                ';
                            }
                        }
                    ?>

                    <div class="form-group row mb-3">
                        <label for="codemelli"> کد ملی : </label>
                        <input name="codemelli" type="text" class="form-control" placeholder="کد ملی">
                    </div>

                    <div class="form-group row mb-3">
                        <div class="form-group col">
                            <label for="fname"> نام : </label>
                            <input name="fname" type="text" class="form-control" placeholder="نام">
                        </div>
                        <div class="form-group col">
                            <label for="lname"> نام خانوادگی : </label>
                            <input name="lname" type="text" class="form-control" placeholder="نام خانوادگی">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="form-group col">
                            <label for="mnumber"> شماره همراه : </label>
                            <input name="mnumber" type="text" class="form-control" placeholder="شماره همراه">
                        </div>
                        <div class="form-group col">
                            <label for="hnumber"> شماره خانه : </label>
                            <input name="hnumber" type="text" class="form-control" placeholder="شماره خانه">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="form-group col">
                            <label for="email"> ایمیل : </label>
                            <input name="email" type="email" class="form-control" placeholder="example@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        </div>
                        <div class="form-group col">
                            <label for="image"> عکس پرسنلی : </label>
                            <input name="image" type="file" class="form-control">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">استان : </label>
                                <select class="form-control" name="province" onChange="iranwebsv(this.value);">
                                    <option value="وارد نشده" id="">لطفا استان را انتخاب نمایید</option>
                                    <option value="تهران" id="">تهران</option>
                                    <option value="گیلان" id="">گیلان</option>
                                    <option value="آذربایجان شرقی" id="">آذربایجان شرقی</option>
                                    <option value="خوزستان" id="">خوزستان</option>
                                    <option value="فارس" id="">فارس</option>
                                    <option value="اصفهان" id="">اصفهان</option>
                                    <option value="خراسان رضوی" id="">خراسان رضوی</option>
                                    <option value="قزوین" id="">قزوین</option>
                                    <option value="سمنان" id="">سمنان</option>
                                    <option value="قم" id="">قم</option>
                                    <option value="مرکزی" id="">مرکزی</option>
                                    <option value="زنجان" id="">زنجان</option>
                                    <option value="مازندران" id="">مازندران</option>
                                    <option value="گلستان" id="">گلستان</option>
                                    <option value="اردبیل" id="">اردبیل</option>
                                    <option value="آذربایجان غربی" id="">آذربایجان غربی</option>
                                    <option value="همدان" id="">همدان</option>
                                    <option value="کردستان" id="">کردستان</option>
                                    <option value="کرمانشاه" id="">کرمانشاه</option>
                                    <option value="لرستان" id="">لرستان</option>
                                    <option value="بوشهر" id="">بوشهر</option>
                                    <option value="کرمان" id="">کرمان</option>
                                    <option value="هرمزگان" id="">هرمزگان</option>
                                    <option value="چهارمحال و بختیاری" id="">چهارمحال و بختیاری</option>
                                    <option value="یزد" id="">یزد</option>
                                    <option value="سیستان و بلوچستان" id="">سیستان و بلوچستان</option>
                                    <option value="ایلام" id="">ایلام</option>
                                    <option value="کهگلویه و بویراحمد" id="">کهگلویه و بویراحمد</option>
                                    <option value="خراسان شمالی" id="">خراسان شمالی</option>
                                    <option value="خراسان جنوبی" id="">خراسان جنوبی</option>
                                    <option value="البرز" id="">البرز</option>
                                </select>
                            </div>

                            <div class="form-group col-6">
                                <label for="">شهر : </label>
                                <select class="form-control" name="city" id="city">
                                    <option value="0">لطفا استان را انتخاب نمایید</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">تاریخ تولد : </label>
                        <?php
                            include_once('php/date.php');
                            $date = gregorian_to_jalali(date('Y'), date('m'), date('d'), $mod='');
                        ?>
                        <div class="row">
                            <input class="form-control col m-1" type="number" name="bd_day"
                                placeholder="روز" min="1" max="31" value="<?php echo $date[2];?>">
                            <input class="form-control col m-1" type="number" name="bd_month"
                                placeholder="ماه" min="1" max="12" value="<?php echo $date[1];?>">
                            <input class="form-control col m-1" type="number" name="bd_year"
                                placeholder="سال" max="<?php echo $date[0]-18;?>" value="<?php echo $date[0]-18;?>">
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="form-group mb-3">
                        <label for="">آدرس : </label>
                        <textarea class="form-control" name="address" rows="15"></textarea>
                    </div>
                    <div class="form-group row mb-3">
                        <input class="btn btn-primary btn-block col m-1" type="submit" name="buttonsubmit" value="ثبت نام">
                        <input class="btn btn-secondary btn-block col m-1" type="reset" name="buttonsubmit" value="پاکسازی">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script src="js/city.js"></script>

</html>