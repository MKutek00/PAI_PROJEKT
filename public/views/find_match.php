<!DOCTYPE html>
<head>
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
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
        <main class="fm-main">
            <div class="find-match-logo">
                <img class="fm-logo" src="public/img/prosze.svg">
            </div>
            <form class="location">
                    <div class="first-line">
                        <i id="Icon1" class="fas fa-map-marker"></i>
                        <input class="location-input" name="location" type="text" placeholder="Miejscowość lub kod pocztowy">
                        <div class="vertical-line"></div>
                        <button class="gps-button"><i id="Icon2" class="fas fa-map-marker"></i></button>
                    </div>
                    <div class="second-line">
                        <input class="zakres-input" name="zakres" type="text" placeholder="Promień wyszukiwań (km)">
                    </div>
            </form>
            <button class="fm-button">Znajdz Mecz</button>
    
        </main>
</body>