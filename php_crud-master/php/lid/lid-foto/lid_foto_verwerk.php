<?php

// lees de informatie over de upload
$bestand = $_FILES['foto'];

// controleer of de upload geslaagd is 
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    // controleer het bestandstype
    if ($_FILES['foto']['type'] == "image/jpg" ||
        $_FILES['foto']['type'] == "image/jpeg" ||
        $_FILES['foto']['type'] == "image/pjpeg") {

        // wat is de fysieke locatie van de uploads-map
        $map = __DIR__ . "/lid_foto_uploads/";

        // maak de bestandsnaam
        $bestand = $_POST['id'] . '.jpg';

        // verplaats de upload naar de juiste map met de juiste naam
        move_uploaded_file($_FILES['foto']['tmp_name'], $map . $bestand);

        // stuur de gebruiker terug naar de foto pagina
        header("Location:lid_foto.php?id=" . $_POST['id']);
    } else {
        echo "Het bestand is van verkeerde type.";
    }
} else {
    echo "Er ging iets mis bij het uploaden.";
}