<?php
session_start();

echo "Logout Succesfully";
session_unset();
header("Location: index.php");