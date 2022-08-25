<?php include __DIR__ . '/../database.php'; ?>

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