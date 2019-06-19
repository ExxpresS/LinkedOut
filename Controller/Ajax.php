<?php
include ($_SERVER['DOCUMENT_ROOT'] ."/Model/PersonneManager.php");
include ($_SERVER['DOCUMENT_ROOT'] ."/Model/CompetenceManager.php");
include ($_SERVER['DOCUMENT_ROOT'] ."/Model/AnnonceManager.php");
include ($_SERVER['DOCUMENT_ROOT'] ."/Model/EcoleManager.php");
include ($_SERVER['DOCUMENT_ROOT'] ."/Model/RechercheManager.php");


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/******************************************
 *          User
 *****************************************/
if($_POST['action'] == 'delete_user') {
    var_dump("Supprimer utilisateur " . $_POST['idUser']);
    $personneManager = new PersonneManager();
    $personneManager->deleteUser($_POST['idUser']);
}

if($_POST['action'] == 'update_user') {
    
    $personneManager = new PersonneManager();
    $personneManager->updateUnePersonne($_POST['idUser'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['mail'],$_POST['mdp']);     
}


if($_POST['action'] == 'getPersonne') {     
      $personneManager = new PersonneManager();

    $infosUsersDb = $personneManager->getAllPersonne();
   
    $tableHeader = '<table class="table">
	                    <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th> 
                                <th scope="col">Login</th>
                                <th scope="col">Password</th>
                                <th scope="col">Téléphone</th>
                            </tr>
                        </thead>
                        <tbody>';
    $tableBody= "";
    foreach ($infosUsersDb as $value) {
    $userId = $value->getIdPersonne();
    $userInfo = '<tr>
                
				<td><input class="updateinput" type="text" name="nom" value="' . $value->getNom() . '" disabled></td>
				<td><input class="updateinput" type="text" name="prenom" value="' . $value->getPrenom() . '" disabled></td>
				<td><input class="updateinput" type="text" name="mail" value="' . $value->getMail() . '" disabled></td>
				<td><input class="updateinput" type="text" name="mdp" value="' . $value->getMdp() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="tel" value="' . $value->getTelephone() .'" disabled></td>
                <td>
                    <i class="far fa-edit" id="'.$userId.'"></i>
                    <i class="far fa-trash-alt" id="Personne-Supp_'. $userId .'" onclick="deleteUser('. $userId .')" ></i>
                    <i class="fa fa-check display-none" id="Personne-Modif_'.$userId.'" ></i>
                </td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
echo $table;
}


/******************************************
 *          Annonce
 *****************************************/
if($_POST['action'] == 'getAnnonce') {     
      $annonceManager = new AnnonceManager();

    $infosUsersDb = $annonceManager->getAllAnnonce();
    
   
    $tableHeader = '<table class="table">
	                    <thead>
                            <tr>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th> 
                                <th scope="col">Ville</th>
                                <th scope="col">Date</th>
                                <th scope="col">Type d\'emploi</th>
                                <th scope="col">Niveau etude</th>
                            </tr>
                        </thead>
                        <tbody>';
    $tableBody= "";
    
    foreach ($infosUsersDb as $value) {
        
    $userId = $value->getId();
    
    $userInfo = '<tr>
                
				<td><input class="updateinput" type="text" name="titre" value="' . $value->getTitre() . '" disabled></td>
				<td><input class="updateinput" type="text" name="description" value="' . $value->getDescription() . '" disabled></td>
				<td><input class="updateinput" type="text" name="ville" value="' . $value->getVille() . '" disabled></td>
				<td><input class="updateinput" type="text" name="date" value="' . $value->getDate() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="typeemploi" value="' . $value->getTypeEmploi() .'" disabled></td>
                                <td><input class="updateinput" type="text" name="niveauetude" value="' . $value->getNiveauEtude() .'" disabled></td>

<td>
                    <i class="far fa-edit" id="'.$userId.'"></i>
                    <i class="far fa-trash-alt" id="Annonce-Supp_'. $userId .'" onclick="deleteAnnonce('. $userId .')" ></i>
                    <i class="fa fa-check display-none" id="Annonce-Modif_'.$userId.'" ></i>
                </td>
            </tr>';
    $tableBody .= $userInfo;
       
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
echo $table;
}

if($_POST['action'] == 'deleteAnnonce') {   
    $annonceManager = new AnnonceManager();
    $annonceManager->delete($_POST['idUser']);
}

if($_POST['action'] == 'updateAnnonce') {
    var_dump($_POST['id']);
    exit;
    $annonceManager = new AnnonceManager();
    $annonceManager->updateUneAnnonce($_POST['id'],$_POST['titre'],$_POST['description'],$_POST['vile'],$_POST['typeEmploi'],$_POST['niveauEtude']);     
}

/******************************************
 *          Competence
 *****************************************/
if($_POST['action'] == 'getCompetence') {   
   
    $competenceManager = new CompetenceManager();

    $infosUsersDb = $competenceManager->getAllCompetence();
   
    $tableHeader = '<table class="table">
	                    <thead>
                            <tr>
                                <th scope="col">Libelle</th>
                                
                            </tr>
                        </thead>
                        <tbody>';
    $tableBody= "";
    foreach ($infosUsersDb as $value) {
    $userId = $value->getIdComp();
    $userInfo = '<tr>
                
				<td><input class="updateinput" type="text" name="nom" value="' . $value->getLibelle() . '" disabled></td>
                <td>
                    <i class="far fa-edit" id="'.$userId.'"></i>
                    <i class="far fa-trash-alt" id="Competence-Supp_'. $userId .'" onclick="deleteCompetence('. $userId .')" ></i>
                    <i class="fa fa-check display-none" id="Competence-Modif_'.$userId.'" ></i>
                </td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
echo $table;
    
}

if($_POST['action'] == 'deleteCompetence') {   
    $competenceManager = new CompetenceManager();
    $competenceManager->deleteCompetence($_POST['idUser']);
}

if($_POST['action'] == 'updateCompetence') {
    
    $competenceManager = new CompetenceManager();
    $competenceManager->updateUnePersonne($_POST['idUser']);     
}


/******************************************
 *          Ecole
 *****************************************/
if($_POST['action'] == 'getEcole') {   
   
    $ecoleManager = new EcoleManager();

    $infosUsersDb = $ecoleManager->getAllEcole();
   
    $tableHeader = '<table class="table">
	                    <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Ville</th>
                                
                            </tr>
                        </thead>
                        <tbody>';
    $tableBody= "";
    foreach ($infosUsersDb as $value) {
    $userId = $value->getIdEcole();
    $userInfo = '<tr>
                
				<td><input class="updateinput" type="text" name="nom" value="' . $value->getNom() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="nom" value="' . $value->getVille() . '" disabled></td>

                <td>
                    <i class="far fa-edit" id="'.$userId.'"></i>
                    <i class="far fa-trash-alt" id="Ecole-Supp_'. $userId .'" onclick="deleteEcole('. $userId .')" ></i>
                    <i class="fa fa-check display-none" id="Ecole-Modif_'.$userId.'" ></i>
                </td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
echo $table;
    
}

if($_POST['action'] == 'deleteEcole') {   
    $ecoleManager = new EcoleManager();
    $ecoleManager->deleteEcole($_POST['idEcole']);
}

if($_POST['action'] == 'updateEcole') {
    
    $ecoleManager = new EcoleManager();
    $ecoleManager->updateUneEcole($_POST['idEcole']);     
}



/******************************************
 *          Recherche
 *****************************************/
if($_POST['action'] == 'getRecherche') {   
   
    $rechercheManager = new RechercheManager();

    $infosUsersDb = $rechercheManager->getAllRecherche();
   
    $tableHeader = '<table class="table">
	                    <thead>
                            <tr>
                                <th scope="col">Domaine</th>
                                <th scope="col">Poste</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Type emploi</th>
                            </tr>
                        </thead>
                        <tbody>';
    $tableBody= "";
    foreach ($infosUsersDb as $value) {
    $userId = $value->getIdRecherche();
    $userInfo = '<tr>
                
				<td><input class="updateinput" type="text" name="domaine" value="' . $value->getDomaine() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="poste" value="' . $value->getPoste() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="description" value="' . $value->getDescription() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="date" value="' . $value->getDate() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="typeEmploi" value="' . $value->getTypeEmploi() . '" disabled></td>
                <td>  
                    <i class="far fa-edit" id="'.$userId.'"></i>
                    <i class="far fa-trash-alt" id="Recherche-Supp_'. $userId .'" onclick="deleteRecherche('. $userId .')" ></i>
                    <i class="fa fa-check display-none" id="Recherche-Modif_'.$userId.'" ></i>
                </td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
echo $table;
    
}

if($_POST['action'] == 'deleteEcole') {   
    $ecoleManager = new EcoleManager();
    $ecoleManager->deleteEcole($_POST['idEcole']);
}

if($_POST['action'] == 'updateEcole') {
    
    $ecoleManager = new EcoleManager();
    $ecoleManager->updateUneEcole($_POST['idEcole']);     
}