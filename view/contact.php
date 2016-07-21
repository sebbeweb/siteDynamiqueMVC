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
    <input type="text" class="col-lg-3 col-lg-offset-2" name="email" placeholder="email">
    <input type="text" class="col-lg-3 col-lg-offset-2" name="sujet" placeholder="sujet du message">
    <textarea type="text" class="col-lg-8 col-lg-offset-2 mes" name="corps" maxlength="255" placeholder="corps du message"></textarea>
    <input type="submit" class="button" value="envoyez">
</form>
<?php
include '../view/template/footer.php';