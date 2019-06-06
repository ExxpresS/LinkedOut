/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$('#home').click(function () {
    $('#admin').removeClass('active');
    $('#post').removeClass('active');
    $('#profil').removeClass('active');
    $('#home').addClass('active');
});

$('#profil').click(function () {
    $('#admin').removeClass('active');
    $('#post').removeClass('active');
    $('#profil').addClass('active');
    $('#home').removeClass('active');
});

$('#post').click(function () {
    $('#admin').removeClass('active');
    $('#post').addClass('active');
    $('#profil').removeClass('active');
    $('#home').removeClass('active');
});

$('#admin').click(function () {
    $('#admin').addClass('active');
    $('#post').removeClass('active');
    $('#profil').removeClass('active');
    $('#home').removeClass('active');
});

//addClass("active")