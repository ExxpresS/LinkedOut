<?php

include ($_SERVER['DOCUMENT_ROOT'] . "/Model/PersonneManager.php");

/**
 * function permit get all informations from user and print it in admin table
 *
 * 
 * @return String with the complete user table
 */
function getUsersInfos() {

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
    $tableBody = "";
    foreach ($infosUsersDb as $value) {
        $userId = $value->getIdPersonne();
        $userInfo = '<tr>
                
				<td><input class="updateinput" type="text" name="nom" value="' . $value->getNom() . '" disabled></td>
				<td><input class="updateinput" type="text" name="prenom" value="' . $value->getPrenom() . '" disabled></td>
				<td><input class="updateinput" type="text" name="mail" value="' . $value->getMail() . '" disabled></td>
				<td><input class="updateinput" type="text" name="mdp" value="' . $value->getMdp() . '" disabled></td>
                                <td><input class="updateinput" type="text" name="tel" value="' . $value->getTelephone() . '" disabled></td>
                <td>
                    <i class="far fa-edit" id="' . $userId . '"></i>
                    <i class="far fa-trash-alt" id="Personne-Supp_' . $userId . '" onclick="deleteUser(' . $userId . ')" ></i>
                    <i class="fa fa-check display-none" id="Personne-Modif_' . $userId . '" ></i>
                </td>
            </tr>';
        $tableBody .= $userInfo;
    }

    $tableEnd = '       </tbody>
                    </table>';

    $table = $tableHeader . $tableBody . $tableEnd;

    return $table;
}

function getProfil($id) {
    
    $personneManager = new PersonneManager();
    
    $infosUsersDb = $personneManager->getUnePersonne($id);
    
    $div = '    <div id="profile" class="content">
      <div class="containers">
        <div class="row">
          <div class="col-lg-12">

            <!-- Title -->
            <div class="title">
              <h1>David Smith</h1>
              <span class="h4 element"></span>
            </div>
            <!-- End of title -->

            <!-- About me -->
            <div class="space">
              <h3>ABOUT ME</h3>
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit libero ac accumsan lobortis. Nam sem lacus, vulputate ut turpis vel, viverra porta ante. Pellentesque a ornare libero. Aenean sed ipsum a lectus volutpat dictum non non
                neque. Nunc sit amet felis non velit consequat venenatis id eu dui.</p>
              <p class="text-justify">In congue eu dui sit amet euismod. Ut vehicula tellus nec laoreet congue. Mauris id eros ultricies, vulputate metus ac, euismod lorem.</p>
            </div>
            <!-- End of about me -->
          </div>

          <!-- Avatar image -->
          <div class="col-lg-6 col-md-12 col-sm-12 hidden-md animated">
            <img src="img/avatar500x680.png" class="avatar" alt="Avatar">
          </div>
          <!-- End avatar image -->

          <!-- Start skills / expertise -->
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="space">
              <h3>EXPERTISE</h3>

              <h5>HTML / CSS3</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" style="width: 90%"></div>
              </div>

              <h5>Javascript</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" style="width: 85%"></div>
              </div>

              <h5>PHP</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-warning" style="width: 80%"></div>
              </div>

              <h5>Angular JS</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-default" style="width: 70%"></div>
              </div>

              <h5>MySQL / NoSQL</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>

              <h5>.NET</h5>
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-danger" style="width: 90%"></div>
              </div>

            </div>
          </div>
          <!-- End of skills / expertise -->
        </div>
        <!-- end row -->
      </div>
      <!-- end containers -->
    </div>';
    return $div;
}
