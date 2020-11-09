<?php


interface articleRepository {
    public static function load($dataArray,$file):bool;
    public function deleat();
    public function update();
    public function save();
}


class application implements articleRepository {

    public static function load($dataArray,$file):bool{
        $path = 'images/'.$_FILES['file']['name'];
        copy($_FILES['file']['tmp_name'], $path);
        $dataArray['path'] = $path;
        $db = MySQL::getConnect();
        $sql = "INSERT INTO application (articleName,description,cat_id,photo) VALUES (:articleName,:description,:cat_id,:path)";
        $query = $db ->prepare($sql);
        $query->execute($dataArray);
        return true;

    } // Отвечает за загрузку данных о созданной статье и их сохранение в бд
    public function deleat(){} // Отвечает за удаление из бд
    public function update(){} // Отвечает за изменения стать (имеетсяы ввиду с Ожидает-> Решено или Отклонено)
    public function save(){} // Отвечает за выгрузку данных о статье (Пользователя)

    

}