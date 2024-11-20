<!DOCTYPE html>
<html>
<head>
    <title>Benzinrechner</title>
</head>
<body>
    <form method="post" action="">
        <label for="liter">Literanzahl:</label>
        <input type="text" id="liter" name="liter"><br><br>
        
        <label for="preis">Preis pro Liter:</label>
        <input type="text" id="preis" name="preis"><br><br>
        
        <input type="submit" name="berechnen" value="Berechnen">
    </form>

    <?php
    if (isset($_POST['berechnen'])) {
        $liter = $_POST['liter'];
        $preisProLiter = $_POST['preis'];
        $gesamtPreis = $liter * $preisProLiter;
        echo "<p>Sie haben $liter Liter getankt.</p>";
        echo "<p>Der Tankpreis beträgt: €" . $gesamtPreis . "</p>";  
    }
    ?>
</body>
</html>