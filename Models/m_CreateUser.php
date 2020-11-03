<?php
include_once("m_ConnectToDb.php");

interface createNewUser {
    public function createUser($field);
}

class createUserIntoMySQL implements createNewUser{

    public function createUser($field){
        //echo 1;
        $MySQL = new MySQL();
        $db = $MySQL->getConnect();

        $sql = "INSERT INTO user (familyName,name,midlName,login,password,email) VALUES (:getFamilyName,:getName,:getMidlName,:getLogin,:getPassword,:getEmail)";
        $query = $db ->prepare($sql);
        $query->execute($field);

        $errInfo = $query->errorInfo();
        if($errInfo[0] !== PDO::ERR_NONE){
           return $errInfo[2];
           exit();
        }
    }

}
