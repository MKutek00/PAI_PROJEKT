<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/lower_leauges.css">
    <script type="text/javascript" src="./public/js/buttons.js" defer></script>
    <script type="text/javascript" src="./public/js/table.js" defer></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">    <title>Znajdz Mecz</title>
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
            <img class="lowerleaugeslogo" src="public/img/lower_leauges.svg">
            <div class="lowerleaugstopic">Ligi Regionalne 2021/22 - Małopolski ZPN</div>
            <section class="lower_leauges">
                <ul class="classAlist">
<!--                    --><?php //var_dump($leagues);?>
                    <?php foreach($leagues as $leauge): ?>
                    <li><i class="fas fa-long-arrow-alt-right"></i>
                       <a href="leauge_table.php?id=<?= $leauge->getId(); ?>">
                           <?= $leauge->getName(); ?> </a></li>
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