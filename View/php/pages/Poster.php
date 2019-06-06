<?php
session_start();
    include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/HeaderUnLog.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetUsersInfos.php';
?>


<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/NavBar.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/LeftMenu.php';
        $title = "olivier";
       ?>
    
    
        <form style='overflow: auto ; padding-left:10px; padding-top:10px'>
        <div class="form-group">
          <label for="exampleInputEmail1">Titre</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre de votre annonce">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Entreprise</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nom de l'entreprise">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Lieu</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Lieu du poste">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Type d'emploi</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>CDI</option>
              <option>CDD</option>
              <option>Contrat d'alternance</option>
              <option>Contrat de professionnalisation</option>
              <option>Stage</option>
              <option>Autre</option>
            </select>
        </div>    
            
            
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Poster</button>
      </form>
        
    
</body>