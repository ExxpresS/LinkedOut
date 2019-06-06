<?php
    
    include ($_SERVER['DOCUMENT_ROOT'] ."/Model/PersonneManager.php");
    

/**
 * function permit get all informations from user and print it in admin table
 *
 * 
 * @return String with the complete user table
 */
function getUsersInfos()
{
    
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
                    <i class="far fa-trash-alt" id="'. $userId .'" onclick="deleteUser('. $userId .')" ></i>
                    <i class="fa fa-check display-none" id="'.$userId.'" ></i>
                </td>
            </tr>';
    $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';
    
    $table = $tableHeader . $tableBody . $tableEnd;
    
return $table;
}

function getProfil($id){
    $personneManager = new PersonneManager();
    
    $infosUsersDb = $personneManager->getUnePersonne($id);
    return $infosUsersDb;
}
