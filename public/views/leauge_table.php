<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet"> 
    <link rel="stylesheet" type= "text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">    
    <title>TABELA</title>
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
        <div class="ptable">
            <h1 class="headin"><?= $table[0]->getLeaugeName();?></h1>
            <table>
                <tr class="definition">
                    <th>#</th>
                    <th colspan="2">Drużyny</th>
                    <th>Punkty</th>
                    <th>Mecze</th>
                    <th>Wygrane</th>
                    <th>Remisy</th>
                    <th>Porażki</th>
                    <th>Bramki+</th>
                    <th>Bramki-</th>
                    <th>Bilans</th>
                </tr>
                <tr class="short-definition">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>P</th>
                    <th>M</th>
                    <th>W</th>
                    <th>R</th>
                    <th>P</th>
                    <th>B+</th>
                    <th>B-</th>
                    <th>B+/B-</th>
                </tr>
                    <?php $step=1;foreach($table as $record):?>
                <tr class="<?php if($step < 3){echo"promotion";}elseif($step > sizeof($table)-2){echo"decrease";}else{echo"normal";}?>">
                    <td><?php echo $step;?></td>
                    <td colspan="2"><?= $record->getName(); ?></td>
                    <td><?= $record->getPoints(); ?></td>
                    <td><?= $record->getGames(); ?></td>
                    <td><?= $record->getWins(); ?></td>
                    <td><?= $record->getLoses(); ?></td>
                    <td><?= $record->getDraws(); ?></td>
                    <td><?= $record->getGoalplus(); ?></td>
                    <td><?= $record->getGoalminus(); ?></td>
                    <td><?= $record->getGoalplusminus(); ?></td>
                </tr>
                    <?php $step += 1;endforeach; ?>
            </table>
        </div>
    </main>
</body>