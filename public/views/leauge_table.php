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
            <h1 class="headin">Nazwa przykładowej ligi</h1>
            <table>
                <tr class="definition">
                    <th>#</th>
                    <th>Drużyny</th>
                    <th></th>
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
                <tr class="normal"">
                    <td><?php echo $step;?></td>
                    <td><?= $record->getName(); ?></td>
                    <td></td>
                    <td><?= $record->getPoints();; ?></td>
                    <td><?= $record->getGames(); ?></td>
                    <td><?= $record->getWins(); ?></td>
                    <td><?= $record->getLoses(); ?></td>
                    <td><?= $record->getDraws(); ?></td>
                    <td><?= $record->getGoalplus(); ?></td>
                    <td><?= $record->getGoalminus(); ?></td>
                    <td><?= $record->getGoalplusminus(); ?></td>
                </tr>
                    <?php $step += 1;endforeach; ?>
<!--                <tr class="promotion">-->
<!--                    <td>2</td>-->
<!--                    <td>Team B</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>3</td>-->
<!--                    <td>Team C</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>4</td>-->
<!--                    <td>Team D</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>5</td>-->
<!--                    <td>Team E</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>6</td>-->
<!--                    <td>Team F</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>7</td>-->
<!--                    <td>Team G</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>8</td>-->
<!--                    <td>Team H</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>9</td>-->
<!--                    <td>Team I</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>10</td>-->
<!--                    <td>Team J</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>11</td>-->
<!--                    <td>Team K</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>12</td>-->
<!--                    <td>Team L</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="normal">-->
<!--                    <td>13</td>-->
<!--                    <td>Team N</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="decrease">-->
<!--                    <td>14</td>-->
<!--                    <td>Team M</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
<!--                <tr class="decrease">-->
<!--                    <td>15</td>-->
<!--                    <td>Team O</td>-->
<!--                    <td></td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                    <td>x</td>-->
<!--                </tr>-->
            </table>
        </div>
    </main>
</body>