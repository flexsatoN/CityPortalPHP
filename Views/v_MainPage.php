<html>
 <head>
  <link rel="stylesheet" type="text/css" href="Views/cascad.css" >
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  
  
  <header>
      <div class="blur">
        <h2>Городской портал</h2>
        <nav>
          <a href="ControlInputPoint.php?cp=c_CreateNewUser" >Зарегестрироваться</a>
          <a href="ControlInputPoint.php?cp=с_LogIn">Войти</a>
          
          
        </nav>   
    </div> 
  </header>

 </head>
 

<script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  } );
  </script>

  

<body style="min-height: 100vh;padding:0;margin:0;background-color:black">


 <div style="display: flex;flex-wrap: wrap;">  
 <?foreach ($array as $arr):?>
    <?if ($arr['status']=='1'):?>

      <div style="width: 48%;min-height:48%;margin:1%">
        
        <div style="width: 100%;height:100%;">       
            <div class="parent" >    
              <h2 style="padding-top: 2%;">Название: <?=$arr['articleName']?> | Дата: <?=$arr['timeStamp']?> | Категория: <?=$arr['catName']?> <br> Статья написана: <?=$arr['login']?> | Состояне: Новое</h3>            
              <div class="blockWbg" style="background-image: url(<?=$arr['photo']?>);"></div>            
              <p style="color:f5f5f7; margin: 1%; text-align:center"><?=$arr['description']?> </p>        
            </div>                                 
        </div>
          
      </div>

    <?endif;?>  
  <?endforeach;?>
</div>

 

  <footer >
    <p style="color: #FFFFFF;background: #1d1d1f;padding:4px;text-align:center;height: 100%;"> Информация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позжеИнформация будет заполнена позже</p>
  </footer>    

</body>


</html>

