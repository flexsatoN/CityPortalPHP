

<?php
include_once("Models/m_ConnectToDb.php");
include_once("Models/dataToMainPage.php");
include_once("Models/m_LoginInCheck.php");
include_once("Models/m_FuncWithCat.php");
include_once("Models/m_ArticleWork.php");
include_once("Models/m_CreateUser.php");

include_once("Core/co_function.php");

session_start();



$db = new mainData();
$array = $db->getArticle();


if (!isset($_SESSION['auth'])){
    
    $controlPrefix = "c_MainPage";
    switch ($_GET['cp'] ?? ""){
        case "с_LogIn":
            $controlPrefix = "с_LogIn";
        break;

        case "c_CreateNewUser":
            $controlPrefix = "c_CreateNewUser";
        break;
    }
   // echo 1;
    include("Controllers/$controlPrefix.php");
}else{
    $controlPrefix = $_GET['cp'] ?? 'c_MainPage';//c_MainPage
    //echo ($controlPrefix);
    $path = "Controllers/$controlPrefix.php";
    include($path);
}
?>




