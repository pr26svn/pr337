<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Таблица Новости</title>
	<link rel="stylesheet" href=style.css>
</head>
<body>
<?php
    require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
    require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
    $newsList=news::getList();

    if ($_GET["id"] != 0):
        news::delete_news($_GET["id"]);
    endif;
?>

<table >
    <tr><td>Номер</td><td>Название</td><td>Действие</td></tr>
    <?php foreach($newsList as $arNews):
            $arr[] = $arNews['id']?>
        <tr>
            <td><?=$arNews["id"];?></td>
            <td><?=$arNews["name"];?></td>
            <td><a href="?id=<?=$arNews["id"];?>">Удалить</a><br/>
            </td>
        </tr>
    <?php endforeach;?>
</table>
</html>