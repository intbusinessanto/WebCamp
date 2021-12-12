<?php
    $conn = new mysqli('localhost', 'root', '', 'webcamp');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }




?>