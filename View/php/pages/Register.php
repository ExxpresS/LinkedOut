<?php
include '../template/HeaderUnLog.php';
?>

<body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">LinkedOut</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/View/php/pages/Login.php">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/View/php/pages/Register.php">S'enregistrer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-light">
                        <article class="card-body mx-auto" style="max-width: 400px;">
                            <h4 class="card-title mt-3 text-center">S'enregistrer</h4>
                            <p class="text-center">Découvrez dès maintenant l'emploi de vos rêves</p>
                            <div id="erreur" class="error_log">
                                <p>Vous n'avez pas rempli correctement les champs du formulaire !</p>
                            </div>
                            <form action="../../../Controller/Register.php" method="post">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input id="inputname" name="name" class="form-control champ" placeholder="Nom" type="text">
                                    <input id="inputsurname" name="surname" class="form-control champ" placeholder="Prénom" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                    </div>
                                    <input id="inputemail" name="email" class="form-control champ" placeholder="Email" type="email">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                    </div>            
                                    <input id="inputphone" name="phone" class="form-control champ" placeholder="Numéro de téléphone" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input id="inputpass" name="pass" class="form-control champ" placeholder="Mot de passe" type="password">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input id="inputverifpass" name="verifpass" class="form-control champ" placeholder="Confirmer mot de passe" type="password">
                                </div> <!-- form-group// -->                                      
                                <div class="form-group input-group">
                                    <div>
                                        <input type="radio" id="demandeur" name="statut" value="demandeur"
                                               checked>
                                        <label for="demandeur">Demandeur</label>
                                        <input type="radio" id="recruteur" name="statut" value="recruteur">
                                        <label for="recruteur">Recruteur</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button id="inputsubmit" type="submit" class="btn btn-primary btn-block">S'enregistrer</button>
                                    <input type="reset" id="rafraichir" class="btn btn-primary btn-block" value="Rafraîchir" />
                                </div> <!-- form-group// -->      
                                <p class="text-center">Déjà un compte? <a href="/View/php/pages/Login.php">Se connecter</a> </p>                                                                 
                            </form>
                        </article>
                    </div> <!-- card.// -->

                </div> 
            </div>
        </div>
    </div>
</div>

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="/View/js/verifpassword.js"></script>
</body>
</html>