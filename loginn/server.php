<?php 
$servername = "localhost";
$username = "root";
$passwordname = "";
$dbname = " "; 

    // create connection
$conn = mysqli_connect($servername, $username ,$passwordname ,$dbname);

    // check connection
if (!$conn) {
    die(" เชื่อมต่อล้มเหลว " . mysqli_connect_errors());
} 

?>