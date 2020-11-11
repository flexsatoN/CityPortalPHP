<?php
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $Check = new checkData();
        //var_dump($Check->loginAndPasswordCheck($_SERVER['login'],$_SERVER['password']));
        if($Check->loginAndPasswordCheck($_POST['login'],$_POST['password']))
        {
            $_SESSION['auth'] = true;
            //include_once("");   
            header("Location:ControlInputPoint.php?cp=c_AuthorPage");  
            
        }else{
            echo 'Что-то не так';
        }

    }else{
        include("Views/v_Authorization.php");  
    }
     
?>

