<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">LinkedOut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li id="home" class="nav-item">
                <?php
                if (basename($_SERVER['PHP_SELF'])== "accueil.php"){
                    echo '<a class="nav-link active" href="accueil.php">
                            <i class="fa fa-home"></i>
                            Home
                        </a>';
                }else{
                    echo '<a class="nav-link" href="accueil.php">
                            <i class="fa fa-home"></i>
                            Home
                        </a>';
                }
                
                ?>
            </li>

            <li id="profil" class="nav-item">
                <?php
                if (basename($_SERVER['PHP_SELF'])== "MonProfil.php"){
                    echo '<a class="nav-link active" href="MonProfil.php">
                            <i class="fa fa-user"> </i>
                            Mon profil
                         </a>';
                }else{
                    echo '<a class="nav-link " href="MonProfil.php">
                            <i class="fa fa-user"> </i>
                            Mon profil
                          </a>';
                }
                
                ?>
                
            </li>
            <li id="post" class="nav-item">
                <?php
                if (basename($_SERVER['PHP_SELF'])== "Poster.php"){
                    echo '<a class="nav-link active" href="Poster.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-plus-circle"></i>
                            Poster
                            </a>';
                }else{
                    echo '<a class="nav-link" href="Poster.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-plus-circle"></i>
                            Poster
                          </a>';
                }
                
                ?>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <?php
            if(isset($_SESSION['idAdmin'])){
                if (basename($_SERVER['PHP_SELF'])== "Admin.php"){
                    echo '<li id="admin" class="nav-item active">
                    <a class="nav-link" href="Admin.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                     Admin
                     </a>
                  </li>';
                }else{
                    echo '<li id="admin" class="nav-item">
                    <a class="nav-link" href="Admin.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                     Admin
                     </a>
                  </li>';
                }
            
            
            }
            
            ?>
        </ul>
        
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Rechercher">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="./Logout.php">
                    Se déconnecter
                </a>
            </li>

        </ul>
    </div>
</nav>
<script type="text/javascript" src="../../js/navBar.js"></script>
