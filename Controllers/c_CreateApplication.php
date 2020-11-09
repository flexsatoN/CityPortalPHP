<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $applicationDataArray = extractFromPostInMas($_POST, ['cat_id','articleName','description']);
        //var_dump($applicationDataArray);
        if (checkOnAllData($applicationDataArray)){
            $confirm = application::load( $applicationDataArray);
            if ($confirm){
                header("Location:ControlInputPoint.php?announce= Заявка принята");
            }else{
                header("Location: ControlInputPoint.php?error=$confirm&cp=c_CreateApplication");
                exit();
            }
            //print_r($confirm);
            
        }else{
           header("Location: ControlInputPoint.php?error=Заполните все поля&cp=c_CreateApplication");
           exit();
        }
    }else{       
        $catsParser = new catsParser();
        $catArray = $catsParser->getCats();
        include('Views\v_CreateApplication.php'); 
    }
    
    

