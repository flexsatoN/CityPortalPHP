<?php
    include_once("Models/m_CreateUser.php");
    include_once("Core/co_function.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      
        $userDataArray = extractFromPostInMas($_POST, ['getFamilyName','getName','getMidlName','getLogin','getPassword','getEmail']);
        if (checkOnAllData($userDataArray)){
            $createUserIntoMySQL = new createUserIntoMySQL();
            $confirm = $createUserIntoMySQL->createUser($userDataArray);
            if (empty($confirm)){
                header("Location:ControlInputPoint.php?announce= Пользователь создан");
            }else{
                header("Location: ControlInputPoint.php?error=$confirm&cp=c_CreateNewUser");
                exit();
            }
            //print_r($confirm);
            
        }else{
           header("Location: ControlInputPoint.php?error=Заполните все поля&cp=c_CreateNewUser");
           exit();
        }
    }
    include("Views/v_creatNewUser.php");   