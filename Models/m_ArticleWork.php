<?php

interface articleRepository {
    public function load();
    public function deleat();
    public function update();
    public function save();
}


class article implements articleRepository {
    public function load(){} // Отвечает за загрузку данных о созданной статье и их сохранение в бд
    public function deleat(){}
    public function update(){}
    public function save(){}
}