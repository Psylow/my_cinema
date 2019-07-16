<?php
include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

</head>
<body>
<div class="header">
    <img src="image/logo_cinema.png">
    <a class="Login" href="login.php">
        Login
    </a>
    <a class="Register" href="index.php">
        Home
    </a>
    <p class="register">Inscrivez-vous !</p>
</div>
<ul>
    <li><a href="film.php">Films</a></li>
    <li><a href="seance.php">Séances</a></li>
    <li><a href="tarif.php">Tarifs</a></li>
</ul>
<form action="register.php" method="post" id="register">
    <h2>Sign Up</h2>
    <p>
        <label for="Username" class="floatLabel">Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </p>
    <p>
        <label for="Email" class="floatLabel">Email</label>
        <input id="Email" name="email" type="text" value="<?php echo $email; ?>">
    </p>
    <p>
        <label for="password" class="floatLabel">Password</label>
        <input id="password" name="password" type="password" value="password_1">
    </p>
    <p>
        <input type="submit" id="submit" value="Create your account" name="reg_user">
    </p>
</form>
</body>
</html>