<?php 

function connect(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbmohajerproject";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch(PDOException $e) {
        die("<p class='alert alert-danger'><strong>اخطار</strong> اتصال به پایگاه داده ناموفق بود</p>". $e->getMessage());
    }
    return $connection;
  }
?>