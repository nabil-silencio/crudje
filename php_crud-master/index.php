<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inloggen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Inloggen</h1>
        <br>
        <form action="php/login/login.php" method="post">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" class="form-control" id="username" placeholder="Vul hier uw username in" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Vul hier uw password in" name="password">
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-dark">Inloggen</button>
        </form>
    </div>

</body>

</html>