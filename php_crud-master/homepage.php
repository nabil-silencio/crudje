<?php
    // start de session
    require_once 'php/session.inc.php';

    // lees de config bestand in de pagina
	require_once 'php/config.inc.php';
	$result = mysqli_query($mysqli, "SELECT * FROM crud_goeie.leden");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Ledenbeheer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Ledenbeheer</h1>
    <br>
	<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Voornaam</th>
			<th scope="col">Achternaam</th>
			<th scope="col">Geboortedatum</th>
			<th scope="col">Geslacht</th>
			<th scope="col">Lid sinds</th>
            <th></th>
            <th></th>
            <th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			while ($data = mysqli_fetch_array($result)) {
				echo 
				"<tr>",
					"<td>" . $data['first_name'] . "</td>",
					"<td>" . $data['last_name'] . "</td>",
					"<td>" . $data['birth_date'] . "</td>",
					"<td>" . $data['gender'] . "</td>",
                    "<td>" . $data['member_since'] . "</td>",
                    "<td><a href='php/lid/lid-bewerken/lid_bewerk.php?id=" . $data['id'] . "'>bewerk</a></td>",
                    "<td><a href='php/lid/lid-verwijderen/lid_verwijder.php?id=" . $data['id'] . "'>Verwijderen</a></td>",
                    "<td><a href='php/lid/lid-foto/lid_foto.php?id=" . $data['id'] . "'>Foto</a></td>",
				"</tr>";
			}
		?>
	</tbody>
	</table>
	<p>
        <a href="php/lid/lid-toevoegen/lid_nieuw.php">Klik hier</a> om een nieuw lid toe te voegen.
    </p>
    <p>
        Je bent ingelogd als <strong><?php echo $_SESSION['username']; ?></strong><br>
        <a href="php/login/logout.php">Klik hier</a> om uit te loggen.
    </p>
    </div>
  </body>
</html>