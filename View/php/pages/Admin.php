<?php
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
            
            
            echo getUsersInfos();
            ?>
        
        
    </div>
</body>

<script src="../../../js/AjaxFunctions.js"></script>