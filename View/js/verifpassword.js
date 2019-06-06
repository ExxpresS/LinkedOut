$(document).ready(function () {

    var $mdp = $('#inputpass'),
            $champVerifPass = $('#inputverifpass'),
            $mail = $('#inputemail'),
            $envoi = $('#inputsubmit'),
            $reset = $('#rafraichir'),
            $erreur = $('#erreur'),
            $champPass = $('.champ');

//    $champPass.keyup(function () {
//        if ($(this).val().length < 5) { // si la chaîne de caractères est inférieure à 5
//            $(this).css({// on rend le champ rouge
//                borderColor: 'red',
//                color: 'red'
//            });
//        } else {
//            $(this).css({// si tout est bon, on le rend vert
//                borderColor: 'green',
//                color: 'green'
//            });
//        }
//    });

    $champVerifPass.keyup(function () {
        if ($(this).val() != $mdp.val()) { // si la confirmation est différente du mot de passe
            $(this).css({// on rend le champ rouge
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(this).css({// si tout est bon, on le rend vert
                borderColor: 'green',
                color: 'green'
            });
        }
    });

    $envoi.click(function (e) {
        //e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi
        // puis on lance la fonction de vérification sur tous les champs :
        verifier($champVerifPass);
        verifier($mdp);
        
    });

    $reset.click(function () {
        $champ.css({
            borderColor: '#ccc',
            color: '#555'
        });
        $erreur.css('display', 'none'); 
    });

    function verifier(champ) {
        if (champ.val() == "") { 
            $erreur.css('display', 'block'); 
            champ.css({
                borderColor: 'red',
                color: 'red'
            });
        }
    }
    
    
    $mail.keyup(function () {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test($mail.val())) { 
            $(this).css({// on rend le champ rouge
                borderColor: 'red',
                color: 'red'
            });
        } else {
            $(this).css({// si tout est bon, on le rend vert
                borderColor: 'green',
                color: 'green'
            });
        }
    });
    
});
