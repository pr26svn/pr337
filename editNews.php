<?php
require ($_SERVER["DOCUMENT_ROOT"]."/models/db.php");
require ($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
$newsList = news:: getByID ($_GET["id"]);
$news = news::update($_POST["id"], $_POST);
?>
<form method="POST">
<input type="text" name="name" value="<?=$newsList["name"]?>">
<input type="hidden" name="id" value="<?=$_GET["id"];?>">
<input type="submit" name="edit">
</form>