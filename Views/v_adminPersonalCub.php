<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Views/cascad.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/tset.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>

<header>
      <div class="blur">
        <h2>Приветствую тебя: <?=$_SESSION['login'] ?? ""?></h2>
        <nav>
          <a href="ControlInputPoint.php?cp=c_CreateApplication">Создать заявку</a>
          <a href="ControlInputPoint.php?cp=c_AuthorPage" >Главная</a>
        </nav>   
    </div> 
  </header>


</head>
  <body style="min-height: 100vh;padding:0;margin:0;background-color:black">

  <div style="display: flex;flex-wrap: wrap;">  
  <?foreach ($array as $arr):?>
    <?if ($arr['status']=='1'):?>
      <div style="width: 48%;min-height:48%;margin:1%">     
        <div style="width: 100%;height:100%;">       
            <div class="parent" >    
              <h2 style="padding-top: 2%;">Название: <?=$arr['articleName']?> | Дата: <?=$arr['timeStamp']?> | Категория: <?=$arr['catName']?> <br> Статья написана: <?=$arr['login']?> | Состояне: Новое</h3>            
              <div class="blockWbg" style="background-image: url(<?=$arr['photo']?>);"></div>            
              <p style="color:white; margin: 1%; text-align:center"><?=$arr['description']?> </p>
                <hr>
              <a href="ControlInputPoint.php?cp=c_CreateApplication&action=compl&id=<?=$arr['application_id']?>" class="accDelbutton">Отметить завершенным </a> 
              <a href="ControlInputPoint.php?cp=c_CreateApplication&action=del&id=<?=$arr['application_id']?>" class="accDelbutton">Удалить пост</a>

            </div>                                 
        </div>       
      </div>
    <?endif;?>  
  <?endforeach;?>
  </div>
  


  <footer >
    <p style="color: #FFFFFF;background: #1d1d1f;margin: 1.5% 0 0 0;padding:4;height:10em;text-align:center"> Информация будет заполнена позже</p>
  </footer>    
  </body>
 
  
</html>