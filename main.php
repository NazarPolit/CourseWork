<!DOCTYPE html>
<html>
<head>
    <?php 
        require_once "functions/functions.php";
        $title = "News of the Lion's city";
        require_once "blocks/head.php";
        $news = getNews(12,$_GET["id"]);
    ?>
</head>
<body>
    <?php require_once "blocks/header.php"?>
    <div id="wrapper">
        <div id="left">
            <?php
            for($i = 0; $i < count($news); $i++){
                echo '<div class="article">
                    <img src="/img/art/' . $news[$i]["id"] . '.jpg" alt="Article ' . $news[$i]["id"] . '"">
                    <h2>' . $news[$i]["title"] . '</h2>
                    <p>' . $news[$i]["intro_text"] . '</p>
                    <a href="/article.php?id='. $news[$i]["id"] . '">
                        <div class="more">More</div>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>
    <?php require_once "blocks/footer.php"?>
</body>
</html>