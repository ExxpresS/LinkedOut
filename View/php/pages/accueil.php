<?php
session_start();
    include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/Header.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetAnnoncesInfos.php';
    //include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetRecherchesInfos.php';
    
?>


<body>
    <?php
    
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/NavBar.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/LeftMenu.php';        
        //   include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/Card.php';
       // include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/Offre.php';

      
       //var_dump($_GET["search"]);
        if(isset($_SESSION['idRecruteur'])){
        echo GetRecherchesInfos($_GET["search"]) ;
    } else {
         echo GetAnnoncesInfos($_GET["search"]) ;
    } 
        
    ?>
    
</body>