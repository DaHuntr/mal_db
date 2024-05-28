<?php 
    //Inkluder denne på alle sider som bruker DB
    require("../func.php");
    $dbConnection = connect();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DB</title>
        <link rel="stylesheet" href="global.css">
    </head>
    <body>
        <h1>Personoversikt</h1>
        <form method="post" action="settinn.php">
            Skriv inn navn
                <input type="text" name="navn">
                <input type="submit">
        </form>
    </body>
</html>