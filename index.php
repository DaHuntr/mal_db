<?php 
    //Inkluder denne på alle sider som bruker DB
    require("func.php");
    $dbConnection = connect();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TITTEL</title>
        <link rel="stylesheet" href="global.css">
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
                            <a href="settinn/">Oprett ny person</a><br>
                            <?php  
                                $resultat = $dbConnection->query("SELECT * FROM person");

                                foreach($resultat as $person)
                                {
                                    $NAVN = $person["navn"];
                                    $ID = $person["personid"];

                                    echo("Navn: " . $NAVN . "<br>");
                                    echo("ID: " . $ID . "<br>");
                                    echo("<a href='slett/index.php?id=$ID'>Slett</a>" . "<br>");
                                    echo("<a href='rediger/index.php?id=$ID'>Rediger</a>" . "<br>");
                                    echo("<hr>");
                                }
                            ?>
                        </div>
                        <div class="box2">
                            <p>Et labore commodo elit aliquip nisi duis ad fugiat culpa est duis culpa est voluptate. Officia elit quis amet enim quis ullamco elit mollit. Anim minim Lorem cillum ipsum. Excepteur proident laborum magna dolore adipisicing dolore do amet ipsum non proident tempor. Nostrud fugiat velit ut sunt esse minim aliquip aliqua irure reprehenderit enim elit. Aliquip duis sunt fugiat aute.</p>
                        </div>
                        <div class="box1">
                            <p>Labore exercitation reprehenderit aute irure. Quis veniam consequat occaecat velit id anim deserunt laborum voluptate veniam ullamco. Lorem et ullamco commodo incididunt cupidatat. Ullamco magna id voluptate ut consequat mollit excepteur quis est id.</p>
                        </div>
                        <div class="box2">
                            <p>Et labore commodo elit aliquip nisi duis ad fugiat culpa est duis culpa est voluptate. Officia elit quis amet enim quis ullamco elit mollit. Anim minim Lorem cillum ipsum. Excepteur proident laborum magna dolore adipisicing dolore do amet ipsum non proident tempor. Nostrud fugiat velit ut sunt esse minim aliquip aliqua irure reprehenderit enim elit. Aliquip duis sunt fugiat aute.</p>
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