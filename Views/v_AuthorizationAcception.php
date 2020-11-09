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
        collapsible: true
      });
    });
  </script>
 </head>

<!--<a href="ControlInputPoint.php?cp=c_CreateNewUser">Зарегестрироваться</a><br>
<a href="ControlInputPoint.php?cp=с_LogIn">Войти</a>-->
<a href="ControlInputPoint.php?cp=c_CreateApplication">Создать заявку</a><br>
<p><?=$_GET['announce']?? ""?></p>

<hr>

 <body style=" margin: 0px;">                                                               
	<div class="innerPase ">              
    <div id="accordion">
      <?foreach ($array as $arr):?>
        <h3 style="margin-bottom:10px">Название: <?=$arr['articleName']?> | Дата: <?=$arr['timeStamp']?> | Категория: <?=$arr['catName']?> | Состояне: Решено</h3>
          <div style="margin-bottom:10px">
            <p><?=$arr['description']?></p>
          </div>
      <?endforeach;?>
    </div>
  </div>
 </body>

</html>

