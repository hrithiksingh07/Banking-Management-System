<?php

// Defining constant php variable for local host

define('DB_host', 'localhost');
define('DB_username', 'u692895437_kanegi');
define('DB_password', 'Rubiks@cube123');
define('DB_name', 'u692895437_kanegi');
$conn = mysqli_connect(DB_host, DB_username, DB_password, DB_name);


if (!$conn) {
    die("connection failed" . mysqli_connect_error());
    echo "Connection Fail";
}
    // $query = " SELECT * FROM login";
    // $result = mysqli_query($conn, $query) or die("Query Fail");

    // if(mysqli_num_rows($result) > 0){

    //     while($row = mysqli_fetch_assoc($result)){
    //         echo $row['Sr.No']; 
    //         echo $row['AccountNo'];
    //         echo $row['Username']; 
    //         echo $row['Password'];

    //         echo "<br>";
    //     }

    // }

    // mysqli_close($conn);
