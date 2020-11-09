<?php
interface connectToMySQL{
    public static function getConnect() ;
    
}  


class MySQL implements connectToMySQL{

    public static function getConnect(){
        $db = new PDO('mysql:host=localhost;dbname=cityportal','root','');
        $db->exec('SET NAMES UTF8');
        return $db;
    }


}


