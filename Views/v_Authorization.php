    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../style/loginpage.css">
        <link rel="stylesheet" type="text/css" href="Views/cascad.css" >
        <link rel="stylesheet" type="text/css" href="Views/usercreate.css" >
        <header>
            <div class="blur">
                <h2>Регистрация</h2>
                <nav>
                
                <a href="ControlInputPoint.php?cp=c_CreateNewUser" >Зарегестрироваться</a>
                <a href="ControlInputPoint.php?cp=c_MainPage" >Главная</a>
                </nav>   
            </div> 
        </header>

    </head>
    <body style="min-height: 100vh;padding:0;margin:0;background-color:black">
        <div>  
                <form method="post" action='ControlInputPoint.php?cp=с_LogIn' style="text-align: center;align-items:center;display: flex;flex-direction: column;margin-top:10%" >  
                    <input name='login' placeholder="Login"><br>
                    <input name='password' type='password' style="margin-top:10px" placeholder="Password"><br>
                    <input type='submit' value='Отправить' style="margin-top:10px">
                </form>
                
                
        </div>  
    </body>

    </html>
    