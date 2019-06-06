<?php
session_start();
    include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/HeaderUnLog.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetUsersInfos.php';
?>


<body>
    <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/NavBar.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/LeftMenu.php';
        include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/MonProfil.php';
        $title = "olivier";

        echo getProfil($_SESSION['idPersonne']);
    ?>
    
</body>