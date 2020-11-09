<?php

class catsParser{
    function getCats():array{
        $db = MySQL::getConnect();
    
        $sql = "select * from cats";
        $query = $db ->prepare($sql);
        $query->execute();
        $arr = $query->fetchAll(PDO::FETCH_ASSOC);
    
        $errInfo = $query->errorInfo();
        if($errInfo[0] !== PDO::ERR_NONE){
            echo $errInfo[2];
            exit();
        }else{
            return $arr;
        }
    }
}