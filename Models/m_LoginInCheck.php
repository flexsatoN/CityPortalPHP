<?php

class checkData{

    public static function encryptPassword($password)
    {
        return checkData::hashPassword($password);
    }

    public function loginAndPasswordCheck($login,$password):bool
    {
       $Db = MySQL::getConnect();
       $sql = "select users_id,password,privilege from users where login='$login'";
       $query = $Db ->prepare($sql);
       $query->execute();
       $arr = $query->fetchAll(PDO::FETCH_ASSOC);
       //echo checkData::hashPassword($password);
       //echo "<br/>";
      // echo $arr[0]['password'];
       //sdf;
       
       if (password_verify($password,$arr[0]['password'])){
            $_SESSION['id'] = $arr[0]['users_id'];
            $_SESSION['login'] = $login;
            $_SESSION['privilege']  = (int)$arr[0]['privilege'];
           return true;
       }else{
           return false;
       }
    }

    private static function hashPassword($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }


}