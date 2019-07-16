<?php

//REGISTER USER
 session_start();

try{
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=epitech_tp', 'root', 'root');
}

catch(PDOException $error){
    echo $error->getCode().' '.$error->getMessage();
}
$username ="";
$email = "";
$password = "";

    if (isset($_POST['reg_user'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $username;
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }


        $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $stmt = $dbh->prepare($user_check_query);
        $result = $stmt->execute();

        if (count($errors) == 0) {
            $password = hash('sha512', $password);
            $query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
            $sql = $dbh->prepare($query);
            $insert = $sql->execute();
            $_SESSION['username'] = $username;
            header('location: profil.php');
        }
    }

// LOGIN USER
if (isset($_POST['login_usr'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = "SELECT * FROM users WHERE username = '" . $username . "' and password = '" . hash('sha512', $password) . "'";
    $sql = $dbh->prepare($result);
    $sql->execute();
    $row = $sql->fetch();
    if ($sql->rowCount() > 0) {
        $_SESSION["ID"] = $row['ID'];

        $_SESSION["username"] = $row['username'];
        header("Location: profil.php");
    } else {
        header("Location: index.php");
    }
}

// Changement mot de passe

if(isset($_POST['Changement_password'])){
    $password = $_POST['CurrentPassword'];
    $newpassword = $_POST['NewPassword'];
    $verifmdp = $_POST['CheckPassword'];
    $login = $_SESSION['login'];
    if(($password != '') && ($newpassword != '') && ($verifmdp != '')) {
        if ($password == $_SESSION['password']) {
            if ($newpassword == $verifmdp) {
                $sql = "UPDATE users SET pasword='$newpassword' WHERE login='$login'";
                $stmt = $dbh->prepare($sql);
                $result = $stmt->execute();
                $_SESSION['password'] = $newpassword;
                header("location: profil.php");
            }
        }
    }

    // Search film
    var_dump($_POST['search_film']);


    }


