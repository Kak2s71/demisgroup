<?php

require_once "./connect/db.php";

$page = isset($_GET["id"]) ? $_GET["id"]: 1;

function countRows($table){
    global $db;
    $rows = $db->prepare("SELECT COUNT(*) FROM news");
    $rows->execute();
    return $rows->fetchColumn();
}

$limit = 3;
$offset = $limit * ($page - 1);
$totalPages = ceil(countRows('a0647259_test') / $limit);

function parseNews($table) {
    global $db;
    global $limit;
    global $offset;
    $sth = $db->prepare("SELECT id, idate, title, announce, content FROM news ORDER BY idate DESC LIMIT $limit OFFSET $offset");
    $sth->execute();
    return $sth->fetchAll();
}

$news = parseNews('a0647259_test');

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Главная страница</title>
</head>
<body>
    <header class="header"></header>
    <main class="main">
        <section class="main__section">
            <div class="main__section_inner">
                <div class="news">
                    <h1 class="news__title">Главная страница</h1>
                    <?php foreach ($news as $item): ?>
                    <div class="news__item">
                        <div class="news__item_title">
                            <time class="news__item_title-time">
                                <?= date('d.m.Y', $item["idate"]) ?>
                            </time>
                            <a href="/pages/view.php?id=<?= $item["id"] ?>" class="news__item_title-text">
                                <h2><?= $item["title"] ?></h2>
                            </a>
                        </div>
                        <p class="news__item_text">
                        <?= $item["announce"] ?>
                        </p>
                    </div>
                    
                    <?php endforeach; ?>
                        </div>
                        <div class="nav__buttons">
                        <div class="news-view_footer_body">
                            <a href="/pages/news.php?id=1" class="news-view_footer_body_item">Все новости</a>
                        </div>
                            <div class="news-view_footer_body">
                            <a href="/form/index.php" class="news-view_footer_body_item">Обратная связь</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer"></footer>
</body>
</html>