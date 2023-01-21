<?php


//Database connection.
$con = MySQLi_connect(
    "localhost", //Server host name.
    "root", //Database username.
    "", //Database password.
    "dbmohajerproject" //Database name or anything you would like to call it.
);

$con->set_charset('utf8');

//Check connection
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}


//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
    $search = $_POST['search'];

    //Search query.
    $sql = "SELECT codemelli,fname,lname FROM student 
    WHERE codemelli LIKE '%$search%' OR fname LIKE '%$search%' OR lname LIKE '%$search%'";

    $ExecQuery = MySQLi_query($con, $Query);

    echo "<table>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

    while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>


<!-- Creating unordered list items.
Calling javascript function named as "fill" found in "script.js" file.
By passing fetched result as parameter. -->
<tr>
    <td onclick="fill('<?php echo $Result['fname']; ?>')"><?php echo $Result['fname']; ?></td>
</tr>

<!-- Below php code is just for closing parenthesis. Don't be confused. -->
    <?php
        }}
        echo'</table>';
    ?>