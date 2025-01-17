<?php
    $dbHost="mysql:host=localhost;dbname=3219;charset=utf-8";
    $dbUser="";
    $dbPass="";
    $dbErrMode=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $conn=new PDO($dbSetup,$dbUser,$dbPass,$dbErrMode);
?>