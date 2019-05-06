<?php
// start de session
require_once '../../session.inc.php';

// lees de config bestand in de pagina
require_once '../../config.inc.php';

// lees het ID uit de URL
$id = $_GET['id'];

// is het id een nummer?
if(is_numeric($id)) {
    // lees het lid uit de database
    $result = mysqli_query($mysqli, "SELECT * FROM crud_goeie.leden WHERE id = $id");

    // is er een lid gevonden uit de URL
    if(mysqli_num_rows($result) == 1) {
        // ja, lees het lid uit de dataset
        $data = mysqli_fetch_array($result);
    } else {
        echo "Geen lid gevonden!";
        exit;
    }
} else {
    // het ID was geen nummer 
    echo "Onjuist ID";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lid Verwijderen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>lid Verwijderen</h1>
        <br>
        <div>
            Weet je zeker dat je het lid
            <strong><?php echo $data['first_name'] . " " . $data['last_name'];?></strong>
            wilt verwijderen?
        </div>
        <div>
            <a href="lid_verwijder_verwerk.php?id=<?php echo $id; ?>">Ja, verwijderen</a>
            /
            <a href="../../../homepage.php">Nee, terug</a>
        </div>
    </div>
</body>

</html>