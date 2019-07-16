<?php
include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
    <a href="index.php">
        <img src="image/logo_cinema.png">
    </a>
    <a class="Login" href="profil.php">
        Profil
    </a>
    <a class="Register" href="logout.php">
        Leave
    </a>
    <p class="register">Les options</p>
</div>
<ul>
    <li><a href="film.php">Films</a></li>
    <li><a href="seance.php">Séances</a></li>
    <li><a href="tarif.php">Tarifs</a></li>
</ul>
<form method="post">
    <h2>Changement de mot de passe</h2>
    <p>
        <label class="floatLabel">Mot de passe actuel :</label>
        <input name="CurrentPassword" type="password">
    </p>
    <p>
        <label  class="floatLabel">Nouveau mot de passe</label>
        <input name="NewPassword" type="password">
    </p>
    <p>
        <label class="floatLabel">Confirmer mot de passe</label>
        <input name="CheckPassword" type="password">
    </p>
    <p>
        <input type="submit" value="Modifier le mot de passe" id="submit" name="Change_password">
    </p>
</form>
</body>
</html>
