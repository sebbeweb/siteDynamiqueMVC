<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../models/daoFactory.php';
require '../models/viewFactory.php';
require '../models/gestionMail.php';
/*
 * requete http GET - GET view
 */
$valeurFromUrl = filter_input(INPUT_GET, 'view');
/*
 * requete http POST - POST news
 */
$nouvelleDate = filter_input(INPUT_POST, 'date');
$nouvelleTitre = filter_input(INPUT_POST, 'titre');
$nouvelleSujet = filter_input(INPUT_POST, 'sujet');
$nouvelleAuteur = filter_input(INPUT_POST, 'auteur');
/*
 * requete http POST - POST contact
 */
$contactEmail = filter_input(INPUT_POST, 'email');
$contactSujet = filter_input(INPUT_POST, 'sujet');
$contactCorps = filter_input(INPUT_POST, 'corps');
/*
 * ajout des news
 */
if (isset($nouvelleAuteur)&&isset($nouvelleDate)&&isset($nouvelleSujet)&&isset($nouvelleTitre)){
    $nouvelle = new News();
    $nouvelle->setDate($date);
    
    insertNews($nouvelleDate,$nouvelleTitre,$nouvelleSujet,$nouvelleAuteur);
    getView($view);
}
/*
 * formulaire de contact
 */
if(isset($contactEmail)&&isset($contactSujet)&&isset($contactCorps)){
    confirmationContact($contactEmail,$contactSujet,$contactCorps);
}
/*
 * demande de vue
 */
if(isset($valeurFromUrl)){
    getView($valeurFromUrl);
}