<?php

include $_SERVER['DOCUMENT_ROOT'] . '/Model/AnnonceManager.php';
include $_SERVER['DOCUMENT_ROOT'] . '/Model/RechercheManager.php';

error_reporting(E_ALL);
session_start();


    

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['location']) && isset($_POST['type']) && isset($_POST['minlevel'])) {


    $title = $_POST['title'];
    $description = $_POST['description'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $minlevel = $_POST['minlevel'];

    $manager = new AnnonceManager();

    
    $manager->insertUneAnnonce($title, $description, $location, $type, $minlevel);
      
    var_dump("jz quiq la ");
    header('Location: /View/php/pages/accueil.php');
    exit();
}


if (isset($_POST['domain']) && isset($_POST['job']) && isset($_POST['description']) && isset($_POST['type'])) {


    $domain = $_POST['domain'];
    $job = $_POST['job'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    $manager = new RechercheManager();

    
    $manager->insertUneRecherche($domain, $job, $description, $type);

    var_dump("jz quiq la ");
    header('Location: /View/php/pages/accueil.php');
    exit();
} 