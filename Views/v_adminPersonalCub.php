<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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


</head>

<body>
        <h1><?=$_SESSION['login'] ?? ""?></h1>
        <a href="ControlInputPoint.php?cp=c_AuthorPage">Главная</a>
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
                    <a href="ControlInputPoint.php?cp=c_CreateApplication&action=compl&id=<?=$arr['application_id']?>" class="accDelbutton">Отметить завершенным </a> 

                    <a href="ControlInputPoint.php?cp=c_CreateApplication&action=del&id=<?=$arr['application_id']?>" class="Delbutton">Удалить пост</a>
                </div>
                <?endif;?>

            <?endforeach;?>
        </div>

    
</body>
</html>