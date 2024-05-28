<?php 
    //Inkluder denne på alle sider som bruker DB
    require("func.php");
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
        <a href="settinn/">Oprett ny person</a><br>
        <?php  
            $resultat = $dbConnection->query("SELECT * FROM person");

            foreach($resultat as $person)
            {
                $NAVN = $person["navn"];
                $ID = $person["personid"];

                echo("Navn:" . $NAVN . "<br>");
                echo("ID" . $ID);
                echo("<a href='slett/index.php?id=$ID'>Slett</a>");
                echo("<a href='rediger/index.php?id=$ID'>Rediger</a>");
                echo("<hr>");
            }
        ?>
    </body>
</html>