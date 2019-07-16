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
    <img src="image/logo_cinema.png">
    <a class="Login" href="index.php">
        Home
    </a>
    <a class="Register" href="register.php">
        Register
    </a>
    <p class="register">Connectez-vous !</p>
</div>
<ul>
    <li><a href="film.php">Films</a></li>
    <li><a href="seance.php">Séances</a></li>
    <li><a href="tarif.php">Tarifs</a></li>
</ul>
<form action="login.php" method="post" id="register">
    <h2>Sign In</h2>
    <p>
        <label for="username" class="floatLabel">Username</label>
        <input id="username" name="username" type="text">
    </p>
    <p>
        <label for="password" class="floatLabel">Password</label>
        <input id="password" name="password" type="password">
    </p>
    <p>
        <input type="submit" value="Connect to my account" id="submit" name="login_usr">
    </p>
</form>
</body>
</html>
