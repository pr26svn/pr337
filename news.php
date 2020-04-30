<?php
class news
{
    Public static function getList(){
        $all = DB::run("SELECT id, name FROM news")->fetchAll();
        return $all;
    }
    public static function delete_news($id){
        $del = DB::run("DELETE FROM news WHERE id=?", array($id));
    }
    Public static function getByID($id){
        $row = DB::run("SELECT * FROM news WHERE id=?", array($id))->fetch();
        return $row ;
    }
    Public static function update ($id, $data=array())
    {
        $str="";
        Foreach($data as $key=>$val)
        {
          $str.= $key."=:".$key;
        }
    $data["id"]=$id;
        $result = DB::run ("Update news SET".$str."where id=:id", array($data));
    return $result;
    }
}