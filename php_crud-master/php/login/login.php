<?php
// lees de config bestand in de pagina
require_once '../config.inc.php';

// lees alle formuliervelden
$username = $_POST['username'];
$password = $_POST['password'];

// controleer of alle formuliervelden waren ingevuld
if (strlen($username) > 0 && strlen($password) > 0) {

    // maak de controle-query
    $query = "SELECT * FROM crud_goeie.users 
              WHERE username = '$username'
              AND password = '$password'";

    // voer de query uit
    $result = mysqli_query($mysqli, $query);

    // controleer of de login correct was
    if (mysqli_num_rows($result) == 1) {
        //login correct, start de sessie
        session_start();

        // sla de username op in de sessie
        $_SESSION['username'] = $username;

        // stuur door naar de homepage
        header("Location:../../homepage.php");
    } else {
        // login incorrect, terug naar het login-formulier
        echo "De login is niet correct";
        exit;
    }
} else {
    echo "Niet alle velden zijn ingevuld!";
    exit;
}
