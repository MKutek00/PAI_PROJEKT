<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" type= "text/css" href="public/css/games_near_you.css">

    <script type="text/javascript" src="./public/js/buttons.js" defer></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>

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
        <main class="fm-main">
            <div class="find-match-logo">
                <img class="fm-logo" src="public/img/prosze.svg">
            </div>
            <form class="location" action="find_match" method="POST" ENCTYPE="application/x-www-form-urlencoded">
                    <div class="first-line">
                        <i id="Icon1" class="fas fa-map-marker"></i>
                        <input class="location-input" name="location" type="text" placeholder="Miejscowość lub kod pocztowy">
                        <div class="vertical-line"></div>
                        <button class="gps-button"><i id="Icon2" class="fas fa-map-marker"></i></button>
                    </div>
                    <div class="second-line">
                        <input class="zakres-input" name="zakres" type="text" placeholder="Promień wyszukiwań (km)">
                    </div>
                <div class="messages">
                    <?php
                    if(isset($messages)){
                        foreach($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <button class="fm-button" type="submit">Znajdz Mecz</button>
            </form>
            <section class="games-near-you">
                <?php foreach($matches as $game):?>

                <div id="game1">
                    <div class="gny-icon">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <div class="right-part">
                        <table>
                            <tr class="upper">
                                <th class="bgf">
                                    <p><?= $game->getPlace(); ?></p>
                                    <p><?= $game->getDstc(); ?>km</p>
                                </th>
                                <th class="ln">
                                    <p><?= $game->getLeagueName(); ?></p>
                                </th>
                                <th class="bgf">
                                    <p><?= $game->getDate(); ?></p>
                                </th>
                            </tr>
                            <tr class="lower">
                                <th>
                                    <p><?= $game->getTeamOne(); ?></p>
                                </th>
                                <th>
                                    <p>----</p>
                                </th>
                                <th>
                                    <p><?= $game->getTeamTwo(); ?></p>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </main>
</body>

<template id="match-template">
    <div id="">
        <div class="gny-icon">
            <i class="fas fa-search-location"></i>
        </div>
        <div class="right-part">
            <table>
                <tr class="upper">
                    <th class="bgf">
                        <p class = "getLocation">GETLOKACJA</p>
                        <p>(1,5km)</p>
                    </th>
                    <th class="ln">
                        <p>Nazwa Przykładowej Ligi</p>
                    </th>
                    <th class="bgf">
                        <p class="getData"></p>
                    </th>
                </tr>
                <tr class="lower">
                    <th>
                        <p class="getTeamA"></p>
                    </th>
                    <th>
                        <p>----</p>
                    </th>
                    <th>
                        <p class="getTeamB"></p>
                    </th>
                </tr>
            </table>
        </div>
    </div>

</template>