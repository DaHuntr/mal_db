<?php
    require("../func.php");
    $NAVN = $_POST["navn"];
    
    $dbConnection = connect();
    $dbConnection->query("INSERT INTO person (navn) VALUES('$NAVN');");

    header("location: ../index.php");
?>