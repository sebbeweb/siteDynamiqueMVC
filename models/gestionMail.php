<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




//Fonction appele!!!
/*
 * confirmation de reception suite a l'envoi du formulaire de contact
 */
function confirmationContact($email,$sujet,$corps){
    //envoi mail a nous
    mail($from, $sujet, $corps,'From:'.$email);
    //envoi confirmation
    $confirmation = "Nous avons bien recu votre demande de contact";
    return mail($email,'RE:'. $sujet, $confirmation,'From:'.$email);
}
/*
 * email envoyés pour la gestion de compte utilisateur
 * recup mdp / confirmCréaCompte / confimSupprCompte
 */
function confirmationCreationCompte(){
    
}
/*
 * parle d'elle même ;)
 */
function newsLetter(){
    //envoyer un email a tous les utilisateur enregistres
    //de notre application qui ont accepte de la recevoir
}