<?php

include $_SERVER['DOCUMENT_ROOT'] . '/Model/PersonneManager.php';
error_reporting(E_ALL);
session_start();


if (isset($_POST['statut']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['verifpass']) && isset($_POST['name']) && isset($_POST['surname']) && ($_POST['pass'] == $_POST['verifpass'])) {


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pass'];
    $telephone = $_POST['telephone'];
    $statut = $_POST['statut'];

    $manager = new PersonneManager();

    if ($manager->verifMail($email)) {
        $manager->insertUnePersonne($name, $surname, "desc", $phone, $email, $password);
        if ($statut == "demandeur") {
            $manager->isDemandeur($manager->getLastid());
        } else if ($statut = "recruteur") {
            $manager->isRecruteur($manager->getLastid());
        }
    }
    header('Location: /View/php/pages/accueil.php');
    exit();
}    


