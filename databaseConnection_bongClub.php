<?php
    $host = "localhost";
    $user = "root";
    $pass = "#";
    $dbName = "bongclub";
    $dbConnect3 = mysqli_connect($host, $user, $pass, $dbName);
    mysqli_set_charset($dbConnect3, 'utf8');

    if(mysqli_connect_errno()){
        echo "데이터베이스 접속 실패";
        echo "오류 번호 : ";
        echo mysqli_error();
    }
?>
