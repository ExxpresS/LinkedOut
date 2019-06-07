/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var htmlElem = document.querySelector('html'); // selectionne la balise HTML toute la page pour changer le background
var pElem = document.querySelector('p'); //selectionne tous les élement de type paragraphe
var imgElem = document.querySelector('img'); // selectionne toutes les images de la page 

var bgcolorForm = document.getElementById('bgcolor');// recupère l'élement qui a pour id bgcolor
var fontForm = document.getElementById('font'); //recupère l'élement qui a pour id font
var imageForm = document.getElementById('image');//recupère l'élement qui a pour id image


if(!localStorage.getItem('bgcolor')) { 
    //console.log("c'est different");
  populateStorage();
} else {
  setStyles();
}

function populateStorage() {
  localStorage.setItem('bgcolor', document.getElementById('bgcolor').value);// enregistre les valeurs de couleur BG font style & image dans la variable de stockage local
  localStorage.setItem('font', document.getElementById('font').value);
  localStorage.setItem('image', document.getElementById('image').value);

  setStyles();
}

function setStyles() {
  var currentColor = localStorage.getItem('bgcolor'); //recuperations des nouvelles valeurs de renseignées
  var currentFont = localStorage.getItem('font'); 
  var currentImage = localStorage.getItem('image');

  document.getElementById('bgcolor').value = currentColor;//Set les valeurs enregistrées a l'élément value de l'item HTML ciblé
  document.getElementById('font').value = currentFont; 
  document.getElementById('image').value = currentImage;

  htmlElem.style.backgroundColor = '#' + currentColor;
  pElem.style.fontFamily = currentFont;
  imgElem.setAttribute('src', currentImage);
}

bgcolorForm.onchange = populateStorage;
fontForm.onchange = populateStorage;
imageForm.onchange = populateStorage;