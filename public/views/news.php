<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/news.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">    <title>Znajdz Mecz</title>
</head>
<body>
        <nav>
            <img src="public/img/logo.svg">
            <ul>
                <li>
                    <i class="fas fa-home"></i>
                    <a href="#" class="button">Strona Główna</a>
                </li>
                <li>
                    <i class="far fa-futbol"></i>
                    <a href="#" class="button">Znajdz Mecz</a>
                </li>
                <li>
                    <i class="fas fa-table"></i>
                    <a href="#" class="button">Niższe Ligi</a>
                </li>
                <li>
                    <i class="fas fa-plus"></i>
                    <a href="#" class="button">Dodaj News</a>
                </li>
                <li>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-twitter"></i>
                </li>
            </ul>
        </nav>
        <main>
            <img class="news-logo" src="public/img/news.svg">
            <section class="news">
                <div class="big news2">                    
                    <div>
                        <h2><?= $news->getTitle() ?></h2>
                        <p><?= $news->getDescription() ?></p>
                    </div>
                    <img src="public/img/uploads/<?= $news->getImage() ?>">
                </div>
                <div class="small news1">
                    <img src="public/img/uploads/football.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                    </div>
                </div>
                <!-- <div class="small news3">
                    <img src="public/img/uploads/football.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                    </div></div>
                <div class="small news4">
                    <img src="public/img/uploads/football.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                    </div></div>
                <div class="small news5">
                    <img src="public/img/uploads/football.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                    </div></div>
                <div class="small news6">
                    <img src="public/img/uploads/football.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                    </div></div>
                <div class="small news7">
                    <img src="public/img/uploads/football.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                    </div></div>
                <div class="small news8">
                    <img src="public/img/uploads/football.jpg">
                    <div>
                        <h2>Title</h2>
                        <p>description</p>
                    </div></div> -->

            </section>
        </main>
</body>