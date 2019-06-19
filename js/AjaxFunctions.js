  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).on( "click",".fa-trash-alt", function() {    
    $(this).parent().parent().remove();
});

$(document).on( "click",".fa-check", function() {
    var tab = [];
    var id = this.id;
    var numId = id.split("_")[1];
    var target = id.split("-")[0];
    
    $('.fa-check').addClass('display-none');
    $(this).parent().parent().find("td input:text,td select").each(function (index) {
        $(this).removeAttr('disabled');
        tab[index] = $(this).val();
    });
    if(target == "Personne");
        updateUser(numId, tab[0], tab[1], tab[4], tab[2],tab[3]);
    if(target == "Annonce");
        updateAnnonce(numId, tab[0],tab[1],tab[2],tab[4],tab[5]);
    if(target == "Competence");
        updateCompetence(numId, tab[0]);
    if(target == "Competence");
        updateCompetence(numId, tab[0]);
    if(target == "Competence");
        updateCompetence(numId, tab[0]);
    tab = [];
    $('.updateinput').attr("disabled", true);
});

$(document).on( "click",".fa-edit", function() {
    $(this).parent().parent().find("td input:text,td select").each(function (index) {
        $(this).removeAttr('disabled');
    });
    $(this).parent().parent().find('.fa-check').removeClass('display-none');
});


$(document).on( "click",".leftMenu", function() {
    $( ".leftMenu" ).each(function(  ) {
        $(this).removeClass("active");
    });
   $(this).addClass("active");
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
       function getPersonne() {
        
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'getPersonne'},
        success: function (html) {
            $(".adminContent").empty().append(html);
        }
    });
    }
///////////////////////////////////////////////
//              Competence
///////////////////////////////////////////////
    function getCompetence() {
        
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'getCompetence'},
        success: function (html) {
            $(".adminContent").empty().append(html);
        }
    });
    }
    function deleteCompetence(id) {
       
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'deleteCompetence', idUser: id},
        success: function (html) {
             alert(html);
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

///////////////////////////////////////////////
//              Annonce
///////////////////////////////////////////////
    function getAnnonce() {
        
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'getAnnonce'},
        success: function (html) {
            $(".adminContent").empty().append(html);
        }
    });
    }
    function deleteAnnonce(id) {
       
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'deleteAnnonce', idUser: id},
        success: function (html) {
             alert(html);
        }
    });
}

function updateAnnonce(id, titre,description,ville,typeEmploi,niveauEtude) {
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'updateAnnonce', id: id, titre: titre,description:description,ville:ville,typeEmploi:typeEmploi,niveauEtude:niveauEtude},
        success: function (html) {
            
        }
    });
}

///////////////////////////////////////////////
//              Ecole
///////////////////////////////////////////////
    function getEcole() {
        
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'getEcole'},
        success: function (html) {
            $(".adminContent").empty().append(html);
        }
    });
    }
    function deleteEcole(id) {
       
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'deleteEcole', idUser: id},
        success: function (html) {
             alert(html);
        }
    });
}

function updateEcole(id, libelle) {
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'updateEcole', id: id, libelle: libelle},
        success: function (html) {
            
        }
    });
}

///////////////////////////////////////////////
//              Recherche
///////////////////////////////////////////////
    function getRecherche() {
        
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'getRecherche'},
        success: function (html) {
            $(".adminContent").empty().append(html);
        }
    });
    }
    function deleteRecherche(id) {
       
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'deleteRecherche', idUser: id},
        success: function (html) {
             alert(html);
        }
    });
}

function updateRecherche(id, libelle) {
    $.ajax({
        type: "POST",
        url: '../../../Controller/Ajax.php',
        data: {action: 'updateRecherche', id: id, libelle: libelle},
        success: function (html) {
            
        }
    });
}