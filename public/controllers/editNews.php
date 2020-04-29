<?php
requre($_SERVER["DOCUMENT_ROOT"]. "/models/DB.php");
requre($_SERVER["DOCUMENT_ROOT"]. "/controllers/news.php");
$newsList=news:: getByID ($_GET["id"]);
$news=news::update ($_POST["id"], $_POST);
?>

<form method="post">
    <input type="text" name="name" value="<?$newsList[0]["name"]?>">
    <input type="hidden" name="id" value="<?=$_GET["id"];?>">
    <input type="submit" name="edit">
</form>