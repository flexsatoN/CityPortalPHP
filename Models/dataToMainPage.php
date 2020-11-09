<?php

class mainData{
    function getArticle():array{
        $db = MySQL::getConnect();
    
        $sql = "select a.articleName, a.description,a.timeStamp,cats.catName, a.application_id, a.photo
        FROM application a 
        INNER JOIN cats ON a.cat_id = cats.cats_id order by a.timeStamp desc";
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
