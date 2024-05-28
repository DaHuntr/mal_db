<?php
    //Tilkobling til database 
    require("../func.php");
    $dbConnection = connect();

    $personID = $_POST["personID"];
    $navn = $_POST["navn"];

    $dbConnection->query("UPDATE person SET navn='$navn' WHERE personid=$personID LIMIT 1;");

    header("location: ../index.php");
    exit;
?>