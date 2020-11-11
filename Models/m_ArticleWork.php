<?php


interface articleRepository {
    public static function load($dataArray,$file);
    public static function deleat($idElem);
    public static function update($idElem);
    public function save();
}


class application implements articleRepository {

    public static function load($dataArray,$file){
        
        $path = 'images/'.$_FILES['file']['name'];
        copy($_FILES['file']['tmp_name'], $path);
        $dataArray['path'] = $path;
        $dataArray['id'] = (int)$_SESSION['id'];
        //var_dump($dataArray);
        //dd();

        $db = MySQL::getConnect();
        $sql = "INSERT INTO application (articleName,user_id,description,cat_id,photo) VALUES (:articleName,:id,:description,:cat_id,:path)";
        $query = $db ->prepare($sql);
        $query->execute($dataArray);
        return true;

    } // Отвечает за загрузку данных о созданной статье и их сохранение в бд
    public static function deleat($idElem){
        $db = MySQL::getConnect();
        $idElem = (int)$idElem;
        $sql = "DELETE FROM application WHERE application_id=$idElem";
        $query = $db ->prepare($sql);
        $query->execute();
        return true;

    } // Отвечает за удаление из бд
    public static function update($idElem){
        $db = MySQL::getConnect();
        $idElem = (int)$idElem;
        $sql = "UPDATE application SET status=2 where application_id=$idElem";
        $query = $db ->prepare($sql);
        $query->execute();
        return true;

    } // Отвечает за изменения стать (имеетсяы ввиду с Ожидает-> Решено или Отклонено)
    public function save(){} // Отвечает за выгрузку данных о статье (Пользователя)

    

}