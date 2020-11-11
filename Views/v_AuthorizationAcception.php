
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
  } );
  </script>
 </head>

<!--<a href="ControlInputPoint.php?cp=c_CreateNewUser">Зарегестрироваться</a><br>
<a href="ControlInputPoint.php?cp=с_LogIn">Войти</a>-->
<h1>Приветствую тебя: <?=$_SESSION['login'] ?? ""?></h1><br>
<ul>
  <li><a href="ControlInputPoint.php?cp=c_CreateApplication">Создать заявку</a><br></li>
  <?if ($_SESSION['privilege']==1):?>
    <li><a href="ControlInputPoint.php?cp=c_AdminPersonalCub">Перейти в личный кабинет</a></li>
  <?else:?>
    <li><a href="ControlInputPoint.php?cp=c_UserPersonalCub">Перейти в личный кабинет</a></li>
  <?endif;?>
  <?=$_GET['announce']?? ""?>
</ul>

<hr>

 <body style=" margin: 0px;">                                                               
	<div class="innerPase ">              
    <div id="accordion">
    <?foreach ($array as $arr):?>
                <?if ($arr['status']=='1'):?>
                <h3 style="margin-bottom:10px;position: sticky;top: 0px;min-height: 2em;border:1px solid black">Название: <?=$arr['articleName']?> | Дата: <?=$arr['timeStamp']?> | Категория: <?=$arr['catName']?> | Статья написана: <?=$arr['login']?> | Состояне: Новое  </h3>                  
                <div>                              
                    <div style="float:right;margin:auto;object-fit: cover;">
                        <img src="<?=$arr['photo']?>" alt="">
                    </div>
                    <?=$arr['description']?><br>
                    <hr>
                </div>
                <?endif;?>

            <?endforeach;?>
    </div>
  </div>
 </body>

</html>

