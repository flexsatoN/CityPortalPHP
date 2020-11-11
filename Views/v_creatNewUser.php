
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="../style/loginpage.css">
  <title>Пример веб-страницы</title>


 </head>
 <body>
    <div class="form">
        <form method="post" action="ControlInputPoint.php?cp=c_CreateNewUser"  >  
            <input type="text" name="getFamilyName" placeholder="Фамилия" />
            <input type="text" name="getName"  placeholder="Имя" />             
            <input type="text" name="getMidlName"  placeholder="Отчество" />
            <input type="text" name="getLogin"  placeholder="Логин" />
            <input type="password" name="getPassword"  placeholder="Пароль" />
            <input type="password" name="getPasswordAgain"  placeholder="Пароль повторно" />
            <input type="email" name="getEmail"  placeholder="Email"/>
            <p><?=$_GET['error']?? ""?></p>
            <button >Send</button>
            <p ></p>
        </form>
        <a href="ControlInputPoint.php?cp=c_MainPage">Главная</a>
    </div>
    
 </body>
</html>