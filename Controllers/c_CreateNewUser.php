<?php
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if (parlCheck($_POST['getPassword'],$_POST['getPasswordAgain'])){
            header("Location: ControlInputPoint.php?error=Пароли отличаются&cp=c_CreateNewUser");
            exit();
        }
      
        $userDataArray = extractFromPostInMas($_POST, ['getFamilyName','getName','getMidlName','getLogin','getPassword','getEmail']);

        if (checkOnAllData($userDataArray)){
            $createUserIntoMySQL = new createUserIntoMySQL();
            $confirm = $createUserIntoMySQL->createUser($userDataArray);
            if (empty($confirm)){
                header("Location:ControlInputPoint.php?announce= Пользователь создан");
                exit();
            }elseif ($confirm[0] == "23000"){
                header("Location: ControlInputPoint.php?error=Такой пользователь уже существует&cp=c_CreateNewUser");
                exit();
            }//elseif ($confirm[0] == "23000"){
               // header("Location: ControlInputPoint.php?error=$confirm&cp=c_CreateNewUser");
                //exit();
            //}

            //print_r($confirm);
            
        }else{
           header("Location: ControlInputPoint.php?error=Заполните все поля&cp=c_CreateNewUser");
           exit();
        }
    }
    include("Views/v_creatNewUser.php");   