<?php
    require("../func.php");
    $personID = $_GET["id"];
    $dbConnection = connect();
    $dbConnection->query("DELETE FROM person WHERE personID=$personID LIMIT 1");
    header("location: ../index.php");
    exit;
?>