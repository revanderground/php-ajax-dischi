<?php include __DIR__ . '/../database.php'; ?>

<!-- Esercizio di oggi: PHP Ajax Dischi
cartella/repo: php-ajax-dischi
Descrizione:
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizziamo: Html, CSS, VueJS (importato tramite CDN), axios, PHP
Prima Versione:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Versione:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Prima Milestone: recuperare la lista dei dischi tramite una chiamata axios e stampare la lista dei titoli degli album all'interno di una lista non numerata <ul>
Seconda Milestone: per ogni disco, stampare una card con tutte le informazioni
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere lato backend.
Consigli del giorno:
Per semplicità utilizzate vue tramite la cdn e non utilizzate i componenti: non è il focus di questo esercizio :occhiolino:
Create  una cartella separata per ciascuna delle due versioni: una conterrà l'index.php, l'altra conterrà l'index.html e il file main.js. Il foglio di stile style.css sarà nella root dell'esercizio, in comune per entrambi gli index
Volendo, anche il file con i dati dei dischi potrebbe trovarsi nella root dell'esercizio ed essere in comune per entrambe le versioni. Ci sarà però bisogno di aggiungere un controllo per distinguere quando il file viene incluso tramite php o richiesto da una chiamata api -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AJAX DISCHI(Prima Versione con PHP)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <img src="../img/logo-small.svg" alt="Logo">
    </header>
    <main>
        <section>

        
            
            <!-- Album List -->
            <div class="list-disc">
                <?php foreach($database as $disc) { ?>
                    <div class="single-card">
                        <div class="img-card">
                            <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
                        </div>
                        <div class="title-card">
                            <h2>
                                <?php echo $disc['title'] ?>
                            </h2>
                            <div class="author-card">
                                <?php echo $disc['author'] ?>
                            </div>
                            <div class="year-card">
                                <?php echo $disc['year'] ?>
                            </div>

                        </div>
                    </div>

                <?php } ?>
            </div>
            
        </section>

    </main>
</body>
</html>