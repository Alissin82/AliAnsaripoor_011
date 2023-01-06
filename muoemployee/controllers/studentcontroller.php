<?php

include_once("controllers\studentcontroller.php");

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

?>