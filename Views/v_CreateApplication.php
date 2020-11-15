
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link rel="stylesheet" href="../style/loginpage.css">
    <link rel="stylesheet" type="text/css" href="Views/cascad.css" >
  <header>
      <div class="blur">
        <h2>Регистрация</h2>
        <nav>
          <a href="ControlInputPoint.php?cp=c_MainPage" >Главная</a>
          <a href="ControlInputPoint.php?cp=с_LogIn">Войти</a>
        </nav>   
    </div> 
  </header>

 </head>

 <body style="min-height: 100vh;padding:0;margin:0;background-color:black">
    <div>  
        <form method="post" action="ControlInputPoint.php?cp=c_CreateApplication" style="text-align: center;align-items:center;display: flex;flex-direction: column;margin-top:10%" >  
            <input type="text" name="articleName" placeholder="Заголовок" style="margin-top: 10px" /><br>
            <select name="cat_id" style="margin-top: 10px">
            <?foreach ($catArray as $key):?>
                <option value="<?=$key['cats_id']?>"><?=$key['catName']?></option>
            <?endforeach;?>
            </select><br>

            <textarea  name="description" placeholder="Текст обращения" cols="30" rows="10" style="margin-top: 10px"></textarea><br>
            <div>
                <input type="file" name="file">    
                <button type="submit" >Send</button>   
            </div>
            
            
        </form>      
    </div>  
 </body>
</html>

