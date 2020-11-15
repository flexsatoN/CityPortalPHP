<?php


interface createNewUser {
    public function createUser($field);
    
}

class createUserIntoMySQL implements createNewUser{

    

    public function createUser($field){
        //echo 1;
        $db = MySQL::getConnect();
        $field['getPassword'] = checkData::encryptPassword($field['getPassword']);
        $sql = "INSERT INTO users (familyName,name,midlName,login,password,email) VALUES (:getFamilyName,:getName,:getMidlName,:getLogin,:getPassword,:getEmail)";
        $query = $db ->prepare($sql);
        $query->execute($field);

        $errInfo = $query->errorInfo();
        if($errInfo[0] !== PDO::ERR_NONE){
           // var_dump($errInfo) ;
           // dd();

           return $errInfo;
           exit();
        }
    }

}
