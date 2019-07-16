<?php
try{
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=epitech_tp', 'root', 'root');
}

catch(PDOException $error){
    echo $error->getCode().' '.$error->getMessage();
}
    $sql = $dbh->query("SELECT * FROM film WHERE titre LIKE '%" . $_POST['search_film'] . "%'");
    $genre = $dbh->query("SELECT * FROM genre");
    $distrib =  $dbh->query("SELECT * FROM distrib");
include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My cinema</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
    <a href="index.php"><img src="image/logo_cinema.png"></a>
    <a class="Login" href="login.php">
        Login
    </a>
    <a class="Register" href="register.php">
        Register
    </a>
    <p class="home">Rechercher un film</p>
</div>
<select name="genre" class="film">
    <option value="default">-- GENRE --</option>
    <?php
        while($option = $genre->fetch()){
            echo '<option value="' . $option['id_genre'] . '">' . $option['nom'] . '</option>';
        }
    ?>
</select>
<select name="distrib" class="film">
    <option>-- DISTRIBUTEUR --</option>
    <?php
        while($dis = $distrib->fetch()){
            echo '<option value="' . $dis['id_distrib'] . '">' . $dis['nom'] . '</option>';
        }
    ?>
</select>
<form action="test.php" method="post">
<input type="text" name="search_film">
<input id="search" type="submit" value="Rechercher">
     <?php
     echo "<div class='request'>";
    while ($row = $sql->fetch()) {
       echo $row['titre'] . " | ";
    }
   echo "</div>";
    ?>
</form>
</body>
</html>

