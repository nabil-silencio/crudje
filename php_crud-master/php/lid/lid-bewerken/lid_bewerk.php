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
	<title>Lid Bewerken</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

	<h1>lid Bewerken</h1>
    <br>
	<form action="lid_bewerk_verwerk.php" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="first_name">Voornaam:</label>
            <input type="text" class="form-control" name="first_name" id="first_name" required="required" 
            value="<?php echo $data['first_name'];?>">
        </div>
        <div class="form-group">
            <label for="last_name">Achternaam:</label>
            <input type="text" class="form-control" name="last_name" id="last_name" required="required" 
            value="<?php echo $data['last_name'];?>">
        </div>
        <div class="form-group">
            <label for="birth_date">Geboortedatum:</label>
            <input type="date" class="form-control" name="birth_date" id="birth_date" required="required" 
            value="<?php echo $data['birth_date'];?>">
        </div>
        <div class="form-group">
			<label>
                <input type="radio" name="gender" id="gender_m" value="M" 
                <?php if ($data['gender'] == 'M') echo 'checked="checked"';?>>
                Man
			</label>
            <br>
            <label>
                <input type="radio" name="gender" id="gender_f" value="F" 
                <?php if ($data['gender'] == 'F') echo 'checked="checked"';?>>
                Vrouw
			</label>
        </div>
        <div class="form-group">
            <label for="member_since">Lid sinds:</label>
            <input type="date" class="form-control" name="member_since" id="member_since" required="required" 
            value="<?php echo $data['member_since'];?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-dark" name="submit" id="submit" value="Opslaan">
            <button onClick="history.back();return false;" class="btn btn-dark">Annuleren</button>
        </div>
	</form>
    </div>
  </body>
</html>