<?php
session_start();
    include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/HeaderUnLog.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetAnnoncesInfos.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetRecherchesInfos.php';
?>


<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/NavBar.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/LeftMenu.php';
        $title = "olivier";
     //   include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/Card.php';
       // include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/Offre.php';
       echo GetAnnoncesInfos() ;
       echo GetRecherchesInfos() ;
        
    ?>
    
</body>