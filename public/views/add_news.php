<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/add_news.css">
    <script type="text/javascript" src="./public/js/buttons.js" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <title>Dodaj News</title>
</head>
<body>
    <nav class="nav_ul">
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
        <section class="project-form">
            <h1>Dodaj News</h1>
            <form action="add_news" method="POST" ENCTYPE="multipart/form-data">
                <div class="messages">
                    <?php
                        if(isset($messages)){
                            foreach($messages as $message) {
                                echo $message;
                            }
                        }
                    ?>
                </div>
                <input name="title" type="text" placeholder="title">
                <textarea name="description" rows=5 placeholder="description"></textarea>

                <input type="file" name="file"/><br/>
                <button type="submit">Dodaj</button>
            </form>
        </section>
    </main>
</body>