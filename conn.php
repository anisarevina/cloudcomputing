<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "beyouty";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("error");
    }

?>