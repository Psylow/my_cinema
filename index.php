<?php
include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>My cinema</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
    <img src="image/logo_cinema.png">
    <a class="Login" href="login.php">
        Login
    </a>
    <a class="Register" href="register.php">
        Register
    </a>
    <p class="home">Bienvenue sur My_Cinema !</p>
</div>
<ul>
    <li><a href="film.php">Films</a></li>
    <li><a href="seance.php">Séances</a></li>
    <li><a href="tarif.php">Tarifs</a></li>
    <?php if($_SESSION['username']) { ?>
    <li><a href="profil.php">Profil</a></li>
    <?php } ?>
</ul>
<div class="cinema">
    <img src="image/salle_cinema.png">
</div>
<a href="profil.php">Profil</a>
<?php
var_dump($_SESSION);
?>

</body>
</html>

