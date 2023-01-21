<?php

include_once("../../asset/php/server.php");

$con = connect();

//Getting value of "search" variable from "livesearchajax.js".
if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
    $search = $_POST['search'];

    //Search query.
    if (empty($search) OR $search =="undefined") {
        $sql = "SELECT * FROM student";
    }
    else{
        $sql = "SELECT codemelli,fname,lname,mnumber,hnumber,email,img,birthdate FROM student 
        WHERE codemelli LIKE '%$search%' OR fname LIKE '%$search%' OR lname LIKE '%$search%' OR mnumber LIKE '%$search%' OR hnumber LIKE '%$search%' OR email LIKE '%$search%' OR birthdate LIKE '%$search%'";
    }

    // select a particular user by some parameters
    $stmt = $con->prepare($sql);
    $stmt->execute(); 
    $data = $stmt->fetchAll();

    if (empty($data)) {
        echo"<p class='alert alert-info'>";
            echo"<strong>اعلان سیستم</strong> دانشجویی با مشخصات مورد نظر پیدا نشد";
        echo"</p>";
    }
    else
    {
        echo"<table class='table table-bordered table-striped table-responsive-xl'>";
        echo"<thead class='table-primary'>";
        echo"<th>کد ملی</th>";
        echo"<th>نام</th>";
        echo"<th>نام خانوادگی</th>";
        echo"<th>شماره تماس</th>";
        echo"<th>شماره منزل</th>";
        echo"<th>پست الکترونیکی</th>";
        echo"<th>تاریخ تولد</th>";
        echo"<th>عکس پرسنلی</th>";
        echo"</thead>";
        echo"<tbody>";
    
        foreach ($data as $row) {
            echo "<tr>";
                echo '<td>' .$row["codemelli"]. '</td>';
                echo '<td>' .$row["fname"]. '</td>';
                echo '<td>' .$row["lname"]. '</td>';
                echo '<td>' .$row["mnumber"]. '</td>';
                echo '<td>' .$row["hnumber"]. '</td>';
                echo '<td>' .$row["email"]. '</td>';
                echo '<td>' .$row["birthdate"]. '</td>';


                $name = $row["fname"] . " " . $row["lname"];
                $img = $row["img"];

                echo "<td>";
                    echo"<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#myModal' onclick='fill_modal(\"$name\",\"$img\")' >";
                        echo'نمایش';
                    echo'</button>';
                echo'</td>';

            echo "</tr>";
        }

        echo"</tbody>";
        echo"</table>";

        echo 
        '<div class="modal fade" id="myModal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title" id="modal_title"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <img id="modal_img" class="w-100" src="data/student/image/"/>
                    </div>
                </div>
            </div>
        </div>';

    }

}

echo'</tbody>';
echo'</table>';


?>

<script>
  function fill_modal(name,img){
    document.getElementById("modal_title").innerHTML = name ;
    document.getElementById("modal_img").src = "data/student/image/" + img;
  }
</script>