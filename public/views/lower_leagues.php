<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/lower_leauges.css">

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
            <img class="lowerleaugeslogo" src="public/img/lower_leauges.svg">
            <div class="lowerleaugstopic">Ligi Regionalne 2021/22 - Małopolski ZPN</div>
            <section class="lower_leauges">
                <ul class="classAlist">
<!--                    --><?php //var_dump($leagues);?>
                    <?php foreach($leagues as $leauge): ?>
                    <li><i class="fas fa-long-arrow-alt-right"></i><?= $leauge->getName(); ?></li>
                    <?php endforeach;?>
                </ul>
                <ul class="classBlist">
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                    <li><i class="fas fa-long-arrow-alt-right"></i>Keeza Klasa B 2021/2022, grupa: ----</li>
                </ul>
            </section>
        </main>
</body>