<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../view/template/enTete.php';
include '../view/template/header.php';
include '../view/template/nav.php';
?>
<form method="post" acction="./app.php">
    <input type="text" class="col-lg-3 col-lg-offset-2" name="titre" placeholder="titre">
    <input type="text" class="col-lg-3 col-lg-offset-2" name="auteur" placeholder="auteur">
    <textarea type="text" class="col-lg-8 col-lg-offset-2 mes" name="sujet" maxlength="255" placeholder="message"></textarea>
    <input type="text" class="date col-lg-offset-8" name="date" placeholder="dddd-mm-jj">
    <input type="submit" class="button" value="valider">
</form>
<?php
include '../view/template/footer.php';