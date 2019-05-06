<?php
// start de session
require_once '../../session.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lid Toevoegen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Nieuwe lid toevoegen</h1>
        <br>
        <form action="lid_nieuw_verwerk.php" method="post">
            <div class="form-group">
                <label for="first_name">Voornaam:</label>
                <input type="text" class="form-control" name="first_name" id="first_name" required="required">
            </div>
            <div class="form-group">
                <label for="last_name">Achternaam:</label>
                <input type="text" class="form-control" name="last_name" id="last_name" required="required">
            </div>
            <div class="form-group">
                <label for="birth_date">Geboortedatum:</label>
                <input type="date" class="form-control" name="birth_date" id="birth_date" required="required">
            </div>
            <div class="form-group">
                <label>
                    <input type="radio" name="gender" id="gender_m" value="M" checked="checked"> Man
                </label>
                <br>
                <label>
                    <input type="radio" name="gender" id="gender_f" value="F" checked="checked"> Vrouw
                </label>
            </div>
            <div class="form-group">
                <label for="member_since">Lid sinds:</label>
                <input type="date" class="form-control" name="member_since" id="member_since" required="required">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-dark" name="submit" id="submit" value="Opslaan">
                <button onClick="history.back();return false;" class="btn btn-dark">Annuleren</button>
            </div>
        </form>
    </div>
</body>

</html>