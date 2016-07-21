<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getView($view){
    $path = '../view/'.$view.'.php';
    if(file_exists($path)){
        return include $path;
    }  else {
        return include '../view/default.php';
    }
}
