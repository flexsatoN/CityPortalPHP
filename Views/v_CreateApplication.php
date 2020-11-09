
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="../style/loginpage.css">
  <title>Пример веб-страницы</title>


 </head>
 <body>
    <div class="form">
        <form method="post" action="ControlInputPoint.php?cp=c_CreateApplication" enctype="multipart/form-data">    
            <input type="text" name="articleName" placeholder="Заголовок" style="margin-top: 10px" /><br>

            <select name="cat_id" style="margin-top: 10px">
            <?foreach ($catArray as $key):?>
                <option value="<?=$key['cats_id']?>"><?=$key['catName']?></option>
            <?endforeach;?>
            </select><br>
        
            <textarea  name="description" placeholder="Текст обращения" cols="30" rows="10" style="margin-top: 10px"></textarea><br>
            <input type="file" name="file" style="margin-top: 10px;">                        
            <p><?=$_GET['error']?? ""?></p>
            <button type="submit" >Send</button>
            <br>
        </form>
    </div>
    
 </body>
</html>

