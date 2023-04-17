<?php

//Recupero gli elementi dal form
$badword = $_GET['badword'];

$paragraph = $_GET['paragraph'];


//Censuro la parola
$censored_word = str_replace($badword, '***', $paragraph);


//Inserisco la lunghezza del paragrafo
$paragraph_length = strlen($paragraph);
$censored_word_length = strlen($censored_word);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Result</title>
    </head>
    <body>
        <div class="container">
            <section class="mt-5">
                <h3>Paragrafo</h3>
                <p><?php echo $paragraph ?></p>
                <p>Il paragrafo originale ha una lunghezza di: <strong><?php echo $paragraph_length ?></strong> caratteri</p>
            </section>
            <section class="mt-5">
                <h3>Paragrafo censurato</h3>
                <p><?php echo $censored_word ?></p>
                <p>Il paragrafo censurato ha una lunghezza di: <strong><?php echo $censored_word_length ?></strong> caratteri</p>
            </section>
        </div>
    </body>
</html>