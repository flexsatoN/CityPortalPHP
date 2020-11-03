<?php
interface connectToMySQL{
    public function getConnect() ;
}  


class MySQL implements connectToMySQL{
    public function getConnect(){
        $db = new PDO('mysql:host=localhost;dbname=web','root','');
        $db->exec('SET NAMES UTF8');
        return $db;
    }

}


