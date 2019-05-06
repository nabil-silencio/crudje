<?php
// start de session
require_once '../../session.inc.php';

// lees de config bestand in de pagina
require_once '../../config.inc.php';

// lees het ID uit de URL
$id = $_GET['id'];

// is het id een nummer?
if(is_numeric($id)) {
    // verwijder het lid uit de database
    $result = mysqli_query($mysqli, "DELETE FROM crud_goeie.leden WHERE id = $id");

    // controleer het resultaat
    if($result) {
        // alles OK, stuur terug naar de index
        header("Location:../../../homepage.php");
        exit;
    } else {
        echo "Er ging wat mis met het verwijderen";
    }
} else {
    // het ID was geen nummer 
    echo "Onjuist ID";
    exit;
}