<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../view/template/enTete.php';
include '../view/template/header.php';
include '../view/template/nav.php';
/*
* Insertion du code d'affichache des news
*/
foreach(getNews() as $row) {
    echo "<h3 class=''>".$row["titre"]." - ".$row["date"]."</h3>";
        echo "<p class=''>".$row["sujet"]."</p>";
  	echo "<p class=''>".$row["auteur"]."</p>";
}
include '../view/template/footer.php';