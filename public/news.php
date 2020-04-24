<?php
    require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
    require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");

    if ($_GET["id"] != 0):
        news::delete_news($_GET["id"]);
    endif;

    $newsList=news::getList();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Новости</title>
        <link rel="stylesheet" type="text/css" href="styles/main.css">
    </head>
    <body>
        <table>
            <tr><td>ID</td><td>Название новости</td><td colspan="2">Действия</td></tr>
            <?php foreach($newsList as $arNews):
                    $arr[] = $arNews['id']?>
                <tr>
                    <td><?=$arNews["id"];?></td>
                    <td><?=$arNews["name"];?></td>
                    <td><a href="?id=<?=$arNews["id"];?>">Удалить</a><br/>
                    <td> <a href="/editNews.php?id=<?=$arNews["id"];?>">Изменить</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>
