<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require '../models/factory.php';
$valeurFromUrl = filter_input(INPUT_GET, 'view');
if(isset($valeurFromUrl)){
    getView($valeurFromUrl);
}