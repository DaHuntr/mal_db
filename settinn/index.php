<?php 
    //Inkluder denne på alle sider som bruker DB
    require("../func.php");
    $dbConnection = connect();
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
                            <h1>Personoversikt</h1>
                            <form method="post" action="settinn.php">
                                Skriv inn navn
                                    <input type="text" name="navn">
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