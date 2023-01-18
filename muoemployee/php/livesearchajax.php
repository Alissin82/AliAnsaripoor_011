<?php

    echo "<table>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

    //Including Database configuration file.
        include("../../asset/php/server.php");

    //Database connection.
        $conn = connect();
    
    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }
        function current() {
            return "<td>" . parent::current(). "</td>";
        }
        function beginChildren() {
            echo "<tr onclick='fill(' ". $GLOBALS['result']['fname'] . " ')' >";
        }
        function endChildren() {
            echo "</tr>" . "\n";
        }   
    }


    try {
        //Getting value of "search" variable from "script.js".
        if (isset($_POST['search'])) {
            //Search box value assigning to $Name variable.
            $search = $_POST['search'];

            //Search query.
            $sql = "SELECT codemelli,fname,lname FROM student 
            WHERE codemelli LIKE '%$search%' OR fname LIKE '%$search%' OR lname LIKE '%$search%'";

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // set the resulting array to associative
            $GLOBALS['result'] = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                echo $v;
            }
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";

    

?>