<?php
    //Tilkobling til database og tabell
    require("../func.php");
    $personID = $_GET["id"];
    $dbConnection = connect();

    //Spørring som henter ut personinfo frå tabell
    $resultat = $dbConnection->query("SELECT * FROM person WHERE personID=$personID LIMIT 1;");
    //Sett inn relevant persondata til variabelen
    $person = mysqli_fetch_array($resultat);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TITTEL</title>
        <link rel="stylesheet" href="../global.css">
    </head>
    <body>
        <div class="font background">
            <div class="header headerfont">
                HEADER
            </div>
            <div class="stuffgohere">
                <div class="content-area stuffgohere">
                    <div class="content-box">
                        <div class="box1">
                            <form method="POST" action="rediger.php">
                                Rediger navn
                                <input type="hidden" name="personID" value="<?php echo($person['personid']) ?>">
                                <input type="text" name="navn" value="<?php echo($person['navn']) ?>">
                                <input type="submit">
                            </form>
                        </div>
                        <div class="box2">
                        </div>
                        <div class="box1">
                        </div>
                        <div class="box2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
            © 2023 DaHunt
            <div class="footertext">Aliqua eu consectetur elit fugiat ex pariatur elit consequat sunt proident aliquip ad qui do.</div> 
            </div>
        </div>
    </body>
</html>