<?php

include 'config.php';

function login(){

$LoginID = $_POST['LoginID'];
$Password = $_POST['Password'];
    
    if(mysqli_num_rows(query("select * from profile where LoginID = '$LoginID'  and Password = '$Password'")) == 1){
        echo "Success";
        
    }
    
}

function regsiter(){

$LoginID = $_POST['LoginID'];
$Password = $_POST['Password'];
    
    
    
    
    
    
    login();
}

switch($submit){
    
    case 1: login();
        break;
    
    case 2: register();
        break;
       
        
        
}