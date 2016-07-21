<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function initDB(){
  $ADRESSE_DB = "localhost";
  $NOM_DB = "exercice";
  $USER = "root";
  $PASS = "";
  return new PDO('mysql:host='.$ADRESSE_DB.';dbname='.$NOM_DB.'', $USER, $PASS);}
 
function showAll($DB_HANDLE){
    foreach($DB_HANDLE->query('SELECT * from news order by ID desc limit 0,3') as $row) {
      echo "<h3 class=''>".$row["titre"]." - ".$row["date"]."</h3>";
  		echo "<p class=''>".$row["sujet"]."</p>";
  		echo "<p class=''>".$row["auteur"]."</p>";
    }
  }
  
//  retourne liste de news
  function getNews(){
      return initDB()->query('SELECT * from news');
  }
      function insertNews($date,$titre,$sujet,$auteur){
          $dataBase =initDB();
          $dataBase->beginTransaction();
      $addNews = $dataBase->prepare("INSERT INTO news (date,titre,sujet,auteur) VALUES (:date,:titre,:sujet,:auteur)");
      $addNews->bindParam(':date', $date);
      $addNews->bindParam(':titre',$titre);
      $addNews->bindParam(':sujet',$sujet);
      $addNews->bindParam(':auteur',$auteur);
      $addNews->execute();
      $dataBase->commit();
      }