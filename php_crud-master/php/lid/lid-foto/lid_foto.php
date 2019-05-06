<?php
// lees het ID uit de URL
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lid Foto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Bestand uploaden</h1>
        <br>
        <form action="lid_foto_verwerk.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" required="required">
            </div>
            <br>
            <div>
                <input type="submit" class="btn btn-dark" name="submit" id="submit" value="Uploaden">
                <button onclick="history.back();return false;" class="btn btn-dark">Annuleren</button>
            </div>
        </form>
        <br>
        <?php 
            // is er al een foto voor dit lid?
            if (file_exists(__DIR__ . '/lid_foto_uploads/' . $id . '.jpg')) {
                echo "<p><img src='lid_foto_uploads/" . $id . ".jpg' alt='foto'></p>";
            }
        ?>
    </div>
</body>

</html>