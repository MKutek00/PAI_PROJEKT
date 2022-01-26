<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/schedule.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <title>TERMINARZ</title>
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
            <div class="selection-container">
                <div class="selection"><p class="select">TABELA</p></div>
                <div class="selection"><p class="select">TERMINARZ</p></div>
            </div>
            <section class="schedule">
                <div id="round1">
                    <h3><i class="fas fa-long-arrow-alt-right"></i>Kolejka 1</h3>
                    <table>
                        <?php foreach($schedule as $game):?>
                        <tr>
                            <th><?= $game->getTeamOne(); ?></th>
                            <th>-</th>
                            <th><?= $game->getTeamTwo(); ?></th>
                            <th></th>
                            <th><?= $game->getDate(); ?><i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                            <?php endforeach; ?>
                    </table>    
                </div>
                <div id="round2">
                    <h3><i class="fas fa-long-arrow-alt-right"></i>Kolejka 2</h3>
                    <table>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                        <tr>
                            <th>Nazwa Team A</th>
                            <th>-</th>
                            <th>Nazwa Team B</th>
                            <th></th>
                            <th>1 Października 2021 8:00<i class="fas fa-map-marker-alt"></i></th>
                        </tr>
                    </table>    
                </div>
            </section>
        </main>
</body>