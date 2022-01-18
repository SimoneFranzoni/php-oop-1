<!-- // create un file `index.php` in cui:
- è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà
- BONUS: creare un file “database” contenente una lista di film che poi vengono istanziati in un ciclo -->

<?php
require_once __DIR__."/movie.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>

    <?php
    
        $new_movie = new Movie("Me contro Te", "per bambini", "Lui", "60 min", "2");

    ?>

    <ul>
        <li>
            Nome: <?php echo $new_movie->name?>
        </li>
        <li>
            Genere: <?php echo $new_movie->genre?>
        </li>
        <li>
            Regista: <?php echo $new_movie->movie_director?>
        </li>
        <li>
            Durata: <?php echo $new_movie->duration?>
        </li>
        <li>
            Voto: <?php echo $new_movie->vote?>
        </li>
        <li>
            <?php echo $new_movie->getReview()?>
        </li>
    </ul>


</body>
</html>