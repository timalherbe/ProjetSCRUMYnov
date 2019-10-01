<?php

function getDataBase()
{
    try
    {
        // Création de l’objet $bdd de type Pdo avec affichage des erreurs
        $bdd = new PDO('mysql:host=localhost;dbname=scrum;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //              Le type de serveur : mysql
        //              Le serveur (l’hôte) : localhostS
        //              La base de données : publishers
        //              La prise en charge des accents : charset=utf8
        //              L’utilisateur : root Le mot de passe : ici aucun pour se connecter à PHP My Admin
        //             Les options : array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION). On indique à l’objet PHP Data Objects (PDO) d’afficher les erreurs SQL comme des exceptions.
        //                 Cela permet de voir les erreurs à l’écran (à n’utiliser qu’en mode développement)
    }


    catch (Exception $e)
    {
        $bdd = null;
    }
    // retourne l’objet de type Pdo
    return $bdd;
}

/**
 * Created by PhpStorm.
 * User: greg
 * Date: 21/03/2019
 * Time: 15:58
 */
?>