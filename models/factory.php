<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function getView($view){
    switch ($view){
        case 'default':
            return include '../view/default.php';
        case 'news':
            return include '../view/news.php';
        default:
            break;
    }
}
