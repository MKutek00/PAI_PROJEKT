<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/news.css">
    <script type="text/javascript" src="./public/js/buttons.js" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>News</title>
</head>
<body>
    <nav>
        <img src="public/img/logo.svg">
        <ul>
            <li>
                <i class="fas fa-home"></i>
                <button id="sgButton" class="leftpanel">Strona Główna</button>
            </li>
            <li>
                <i class="far fa-futbol"></i>
                <button id="fmButton" class="leftpanel">Znajdz Mecz</button>
            </li>
            <li>
                <i class="fas fa-table"></i>
                <button id="nlButton" class="leftpanel">Niższe Ligi</button>
            </li>
            <li>
                <i class="fas fa-plus"></i>
                <button id="dnButton" class="leftpanel">Dodaj News</button>
            </li>
            <li>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-twitter"></i>
            </li>
        </ul>
    </nav>
    <main>
        <button id="logout">Wyloguj</button>
        <img class="news-logo" src="public/img/news.svg">
        <section class="news">
        <?php foreach($news as $new): ?>
        <div class="small">
            <div>
                <h2><?= $new->getTitle(); ?></h2>
                <p><?= $new->getDescription(); ?></p>
            </div>
            <img src="public/img/uploads/<?= $new->getImage(); ?>">
        </div>
        <?php endforeach; ?>
        </section>
    </main>
</body>