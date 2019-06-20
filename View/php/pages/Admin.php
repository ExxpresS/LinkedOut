<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/Header.php';
?>
<link rel="stylesheet" href="../../css/AdminStyle.css">

<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/NavBar.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/View/php/template/LeftMenu.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/Controller/GetUserInfos.php';
    ?>
    <div class="adminContent">
        <?php
        
        if (isset($_SESSION["idAdmin"])) {
            echo getUsersInfos();
        } else {
            echo 'acces interdit <a href="http://stmncv2.fr/View/php/pages/accueil.php">Retourner a l\'accueil</a>';
        }
        ?>


    </div>
</body>

<script src="../../../js/AjaxFunctions.js"></script>