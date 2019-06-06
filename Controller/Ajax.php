<?php
include ($_SERVER['DOCUMENT_ROOT'] ."/Model/PersonneManager.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_POST['action'] == 'delete_user') {
    var_dump("Supprimer utilisateur " . $_POST['idUser']);
    $personneManager = new PersonneManager();
    $personneManager->deleteUser($_POST['idUser']);
}

if($_POST['action'] == 'update_user') {
    
    $personneManager = new PersonneManager();
    $personneManager->updateUnePersonne($_POST['idUser'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['mail'],$_POST['mdp']);     
}
