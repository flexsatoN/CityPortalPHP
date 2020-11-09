<?php

function checkOnAllData($array){
    foreach ($array as $element){
        if (!isset($element)){
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