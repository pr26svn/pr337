<?php
	

	if($_SERVER["REQUEST_METHOD"] == "GET") {
require($_SERVER["DOCUMENT_ROOT"] . "/models/DB.php");
	require($_SERVER["DOCUMENT_ROOT"] . "/controllers/news.php");
	    $id = $_GET['id'];
	    $getById = news::getByID($id);

	}else{
	    if (!isset($_POST["id"])) {
	        header("Location: news.php");
	        exit();
	    }
require($_SERVER["DOCUMENT_ROOT"] . "/models/DB.php");
	require($_SERVER["DOCUMENT_ROOT"] . "/controllers/news.php");	    $id = $_POST['id'];
	    news::update($id,$_POST['name'],$_POST['text']);
	    header("Location: news.php");
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Редактирование
        </title>
      <link rel="stylesheet" type="text/css" href="styles/style_editNews.css">
    </head>
    <body>
        <form action="editNews.php" method="post" >  

	        <div class="block">         
	            <label for="name">
	                Название:
	            </label>
	            <input type="text" id="title" name="name" value="<?=$getById['name']?>" >
	        </div>
	        <div class="block">
	            <label for="text">
	                Содержание:
	            </label>
	            <textarea name="text"><?=$getById['text']?></textarea><br>
	            <div class="id">
	            	<label for="id">Номер новости:</label>
	            	<input readonly="" name="id" value="<?=$getById['id']?>">
	            </div>
        	</div>
        	<div class="block block-buttons">       
	            <input id="block-submit" type="submit">
	            <a href="/news.php"><button id="back" style="">Отмена</button></a>
            </div>
        </form>
    </body>
</html>