<?php
// start de session
require_once '../../session.inc.php';

// lees de config bestand in de pagina
require_once '../../config.inc.php';

// lees alle formuliervelden in de pagina
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$member_since = $_POST['member_since'];

// controleer of alle velden zijn ingevuld
if (strlen($first_name)     > 0 &&
    strlen($last_name)      > 0 &&
    strlen($birth_date)     > 0 &&
    strlen($gender)         > 0 &&
    strlen($member_since)   > 0) {

    // controleer of de data wel correct is
    $check1 = strtotime($birth_date);
    $check2 = strtotime($member_since);
    if (date('Y-m-d', $check1) == $birth_date &&
        date('Y-m-d', $check2) == $member_since) {

            // als is alle data OK, maak de query
            $query = "INSERT INTO crud_goeie.leden
                (first_name, last_name, birth_date, gender, member_since) 
                VALUES (
                '$first_name',
                '$last_name',
                '$birth_date',
                '$gender',
                '$member_since')";

            // voer de query uit
            $result = mysqli_query($mysqli, $query); 

            // controleer het resultaat
            if ($result) {
                // alles OK, stuur terug naar de homepage
                header("Location:../../../homepage.php");
                exit;
            } else {
                echo 'Er is iets mis gegaan bij het toevoegen!';
            }   
    } else {
        // er is iets mis met een datum
        echo 'Een van de ingevulde data was ongeldig!';                    
    }
} else {
    echo 'Niet alle velden waren ingevuld!';
}