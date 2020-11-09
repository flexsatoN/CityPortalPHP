<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $applicationDataArray = extractFromPostInMas($_POST, ['cat_id','articleName','description']);
        

        //var_dump($_FILES);
        if (checkOnAllData($applicationDataArray)){
            $confirm = application::load( $applicationDataArray,$_FILES['file']);
            if ($confirm){
                header("Location:ControlInputPoint.php?announce= Заявка принята?cp=c_MainPage");
            }else{
                header("Location: ControlInputPoint.php?error=$confirm?cp=c_CreateApplication");
                exit();
            }
            //print_r($confirm);
            
        }else{
            include_once("c_CreateApplication.php");
           exit();
        }
    }else{       
        $catsParser = new catsParser();
        $catArray = $catsParser->getCats();
        include('Views\v_CreateApplication.php'); 
    }
    
    

