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
    <a class="Login" href="logout.php">
        Leave
    </a>
    <a class="Register" href="index.php">
        Home
    </a>
    <p class="register">Votre profil !</p>
</div>
<ul>
    <li><a href="abonnement.php">Abonnement</a></li>
    <li><a href="option.php">Options</a></li>
    <li><a href="logout.php">Déconnexion</a></li>
</ul>
<div class="profil">
<?= 'Bienvenue ' . $_SESSION['username'] . ' voici ton profil !'?>
</div>
</body>
</html>

