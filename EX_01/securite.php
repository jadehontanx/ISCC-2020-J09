<!DOCTYPE html>
<html>

<?php
session_start();
if (isset($_POST['submit'])&& isset($_POST['password']) && isset($_POST["login"]) && $_POST['password'] == '2020') {
    $_SESSION['id'] = $_POST['login'];
    setcookie("id", $_POST['login']);
    header("Location: mini-site-routing.php?page=admin");
} else {
    echo "Mauvais couple identifiant / mot de passe.";
    echo '<a href="mini-site-routing.php?page=connexion"> connexion </a>';
}

?>

</html>