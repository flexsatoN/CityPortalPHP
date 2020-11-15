<?php

function checkOnAllData($array){
    foreach ($array as $element){
        if ($element == ""){
            return false;
        }         
    }
    return true;
    
}

function extractFromPostInMas($target,$fields):array{
    $res = [];
    foreach ($fields as $field ){
        $res[$field] = trim($target[$field]);
    }
    return $res;
}

function parlCheck($firstString,$secondString):bool{

    return $firstString!=$secondString ? true:false;
}