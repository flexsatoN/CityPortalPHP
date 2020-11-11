<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $applicationDataArray = extractFromPostInMas($_POST, ['cat_id','articleName','description']);
        

        //var_dump($_FILES);
        if (checkOnAllData($applicationDataArray)){
            $confirm = application::load( $applicationDataArray,$_FILES['file']);
            if ($confirm){
                header("Location:ControlInputPoint.php?cp=c_AuthorPage");
            }else{
                header("Location: ControlInputPoint.php?cp=c_CreateApplication");
                exit();
            }
            //print_r($confirm);
            
        }else{
            include_once("c_CreateApplication.php");
           exit();
        }
    }else
    {      
        if(!isset($_GET['action'])){
            $catsParser = new catsParser();
            $catArray = $catsParser->getCats();
            include('Views\v_CreateApplication.php'); 
        }
        else{
            if ($_GET['action']=='compl'){
                application::update($_GET['id']);
                header('Location:ControlInputPoint.php?cp=c_AdminPersonalCub');
            }else{              
                application::deleat($_GET['id']);
                header('Location:ControlInputPoint.php?cp=c_AdminPersonalCub');

            }
        }
      
    }
    
    

