<?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $Check = new checkData();
        //var_dump($Check->loginAndPasswordCheck($_SERVER['login'],$_SERVER['password']));
        if($Check->loginAndPasswordCheck($_POST['login'],$_POST['password']))
        {
            include("Views/v_AuthorizationAcception.php");   
            
        }else{
            echo 'Что-то не так';
        }

    }else{
        include("Views/v_Authorization.php");  
    }
     
?>

