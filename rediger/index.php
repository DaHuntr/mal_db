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

<form method="POST" action="rediger.php">
    Rediger navn
    <input type="hidden" name="personID" value="<?php echo($person['personid']) ?>">
    <input type="text" name="navn" value="<?php echo($person['navn']) ?>">
    <input type="submit">
</form>