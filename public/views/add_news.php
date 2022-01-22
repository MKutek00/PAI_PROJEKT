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
        <section class="project-form">
            <h1>UPLOAD</h1>
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
                <button type="submit">send</button>
            </form>
        </section>
    </main>
</body>