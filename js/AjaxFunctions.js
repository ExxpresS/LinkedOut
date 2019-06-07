  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('.fa-trash-alt').click(function () {
    
    $(this).parent().parent().remove();
});

$('.fa-check').click(function () {
    var tab = [];
    
    $('.fa-check').addClass('display-none');
    $(this).parent().parent().find("td input:text,td select").each(function (index) {
        $(this).removeAttr('disabled');
        tab[index] = $(this).val();
    });
    
    updateUser($(this).attr('id'), tab[0], tab[1], tab[4], tab[2],tab[3]);
    tab = [];
    $('.updateinput').attr("disabled", true);
});

$('.fa-edit').click(function () {
    $(this).parent().parent().find("td input:text,td select").each(function (index) {
        $(this).removeAttr('disabled');
    });
    $(this).parent().parent().find('.fa-check').removeClass('display-none');
});



///////////////////////////////////////////////
//              USER
///////////////////////////////////////////////
function deleteUser(id) {

    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'delete_user', idUser: id},
        success: function (html) {
            alert(html);
        }
    });
}

function updateUser(id, nom, prenom, tel, mail, pass) {
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'update_user', idUser: id, nom: nom, prenom: prenom, tel: tel, mail: mail, mdp: pass},
        success: function (html) {
            
        }
    });
   }
   
///////////////////////////////////////////////
//              Competence
///////////////////////////////////////////////
    function getCompetence() {
        
        /*
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'getCompetence'},
        success: function (html) {
            $(".adminContent").empty().append(html);
        }
    });*/
    }
    function deleteCompetence(id) {

    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'deleteCompetence', idUser: id},
        success: function (html) {
            
        }
    });
}

function updateCompetence(id, libelle) {
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'updateCompetence', id: id, libelle: libelle},
        success: function (html) {
            
        }
    });
}
