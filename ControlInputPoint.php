<?php
include_once("Models/m_ConnectToDb.php");
include_once("Models/dataToMainPage.php");
include_once("Models/m_LoginInCheck.php");
include_once("Models/m_FuncWithCat.php");
include_once("Models/m_ArticleWork.php");
include_once("Models/m_CreateUser.php");

include_once("Core/co_function.php");



$db = new mainData();
$array = $db->getArticle();
$controlPrefix = $_GET['cp'] ?? 'с_LogIn';//c_MainPage

$path = "Controllers/$controlPrefix.php";

include_once($path);