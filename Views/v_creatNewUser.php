
<html>
 <head>
 <link rel="stylesheet" href="../style/loginpage.css">
 <link rel="stylesheet" type="text/css" href="Views/cascad.css" >
 <link rel="stylesheet" type="text/css" href="Views/usercreate.css" >
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Пример веб-страницы</title>

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
        <form method="post" action="ControlInputPoint.php?cp=c_CreateNewUser" style="text-align: center;align-items:center;display: flex;flex-direction: column;margin-top:10%" >  
          <input type="text" name="getFamilyName" placeholder="Фамилия" /> <br>
          <input type="text" name="getName"  placeholder="Имя" />   <br>          
          <input type="text" name="getMidlName"  placeholder="Отчество" /><br>
          <input type="text" name="getLogin"  placeholder="Логин" /><br>
          <input type="password" name="getPassword"  placeholder="Пароль" /><br>
          <input type="password" name="getPasswordAgain"  placeholder="Пароль повторно" /><br>
          <input type="email" name="getEmail"  placeholder="Email"/><br>
          <p style="color:white"><?=$_GET['error']?? ""?></p>
          <button >Send</button>
        </form>      
    </div>  
 </body>
</html>