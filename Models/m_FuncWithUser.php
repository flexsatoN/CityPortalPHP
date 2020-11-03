<?php

function insertData(string $familyName,string $name,string $midlName,string $login,$password,$email){

    $db = new PDO('mysql:host=localhost;dbname=web','root','');
    $db->exec('SET NAMES UTF8');

    $field = ['familyName' => $familyName,'name' => $name,'midlName' => $midlName,'login' => $login,'password' => $password,'email' =>$email];

    $sql = "INSERT INTO user (familyName,name,midlName,login,password,email) VALUES (:familyName,:name,:midlName,:login,:password,:email)";
    $query = $db ->prepare($sql);
    $query->execute($field);
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    //<a class="ui-button ui-widget ui-corner-all" href="LoginPage.html">Зарегестрироваться</a>
    //<a class="ui-button ui-widget ui-corner-all" href="">Войти</a>
}


function getFourArticle():array{
    $db = new PDO('mysql:host=localhost;dbname=web','root','');
    $db->exec('SET NAMES UTF8');
    $sql = "SELECT a.articleName, a.description,a.timeStamp,cat.catName,a.id_article
            FROM article a
            INNER JOIN cat ON a.id_cat = cat.id_cat";
    $query = $db ->prepare($sql);
    $query->execute();
    $arr = $query->fetchAll(PDO::FETCH_ASSOC);

    return $arr;

    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
}


