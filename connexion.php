<?php
require_once("bdd.php");
if (isset($_POST["mail"])) {
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = htmlspecialchars($_POST['password']);

    $bdd = getDataBase();
    $connect = false;

    $stmt = $bdd->prepare ("SELECT mail, mdp, id, role FROM comptes WHERE mail = :pseudo AND mdp = :pass");
    $stmt -> execute(array('pseudo' => $mail, 'pass' => $mdp));
    $resultat = $stmt->fetch();
    $stmt -> closeCursor();

    if (!$resultat)
    {
        header("Location: index.php");
        echo 'Mauvais identifiant ou mot de passe !';

    }
    else
    {
        session_start();
        $_SESSION['login'] = $resultat['mail'];
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['role'] = $resultat['role'];
        header("Location: index.php"); exit();
    }

}
?>