<?php
class news
{
/* 
получаем полного списка новостей, лучше сделать ограничение и использовать в запросе LIMIT и выводить ни весь список, а  постранично
*/
   Public static function getList(){
$all = DB::run("SELECT id, name FROM news")->fetchAll();
return $all;
	}
/*
 Получаем конкретную новость по ее id
*/
   Public static function getByID($id){
$row = DB::run("SELECT * FROM news WHERE id=?", array($id))->fetch();
return $row ;
	}

}