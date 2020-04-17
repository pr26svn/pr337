<?php
    require($_SERVER["DOCUMENT_ROOT"]."/models/DB.php");
    require($_SERVER["DOCUMENT_ROOT"]."/controllers/news.php");
    $newsList=news::getList();

    if ($_GET["id"] != 0):
        news::ydalenienowostey($_GET["id"]);
    endif;
?>

<table>
    <tr><td>ID</td><td>Название новости</td><td>Действия</td></tr>
    <?php foreach($newsList as $arNews):
            $arr[] = $arNews['id']?>
        <tr>
            <td><?=$arNews["id"];?></td>
            <td><?=$arNews["name"];?></td>
            <td><a href="?id=<?=$arNews["id"];?>">Удалить</a><br/>
<!--                <a href="/editNews.php?id=--><?//=$arNews["id"];?><!--">Изменить</a>-->
            </td>
        </tr>
    <?php endforeach;?>
</table>
