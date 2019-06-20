<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/HeaderUnLog.php';
include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetUsersInfos.php';
?>
<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/NavBar.php';
    //include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/LeftMenu.php';
    $title = "olivier";
    if(isset($_SESSION['idEtudiant']) || isset($_SESSION["idAdmin"])){
        echo '<form style=\'overflow: auto ; padding-left:10px; padding-top:10px; width:60%;margin: auto\' action="/Controller/Poster.php" method="post">
        <div class="form-group" >
            <label for="exampleInputEmail1">Domaine</label>
            <input name="domain"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Domaine recherché">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Poste</label>
            <input name="job"  class="form-control" id="exampleInputPassword1" placeholder="Poste recherché">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input name="description"  class="form-control" id="exampleInputPassword1" placeholder="Votre description">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Type d\'emploi</label>
            <select name="type" class="form-control" id="exampleFormControlSelect1">
                <option>CDI</option>
                <option>CDD</option>
                <option>Contrat d\'alternance</option>
                <option>Contrat de professionnalisation</option>
                <option>Stage</option>
                <option>Autre</option>
            </select>
        </div> 
        <button type="submit" class="btn btn-primary">Poster</button>
    </form>';
    }
    if(isset($_SESSION['idRecruteur']) || isset($_SESSION["idAdmin"])){
        echo '<form style=\'overflow: auto ; padding-left:10px; padding-top:10px; width:60%;margin: auto\' action="/Controller/Poster.php" method="post">
        <div class="form-group" >
            <label for="exampleInputEmail1">Titre</label>
            <input name="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre de votre annonce">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Entreprise</label>
            <input name="enterprise"  class="form-control" id="exampleInputPassword1" placeholder="Nom de l\'entreprise">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input name="description"  class="form-control" id="exampleInputPassword1" placeholder="Description du poste">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Lieu</label>
            <input name="location" class="form-control" id="exampleInputPassword1" placeholder="Lieu du poste">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Type d\'emploi</label>
            <select name="type" class="form-control" id="exampleFormControlSelect1">
                <option>CDI</option>
                <option>CDD</option>
                <option>Contrat d\'alternance</option>
                <option>Contrat de professionnalisation</option>
                <option>Stage</option>
                <option>Autre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Niveau minimum</label>
            <input name="minlevel" class="form-control" id="exampleInputPassword1" placeholder="Niveau minimum">
        </div>    
        <button type="submit" class="btn btn-primary">Poster</button>
    </form>';
    }
    ?>
 
</body>