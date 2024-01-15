<?php

require_once __DIR__ . '/database.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row row-cols-3">
            <?php try { ?>
                <?php foreach ($products as $product) { ?>
                    <div class="col mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <?php echo $product->name; ?>
                                </div>
                                <div class="card-text">
                                    <?php echo $product->getCategory()->getName(); ?>
                                    <br>
                                    Prezzo: <?php echo $product->getPrice(); ?>
                                    <br>
                                    Disponibilità: <?php echo $product->getAvailability(); ?>
                                    <br>
                                    <?php echo $product->getInfo(); ?>
                                    <br>
                                    <?php echo $product->getWeight(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } catch (Exception $e) {
                echo 'Errore: ' . $e->getMessage();
            } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>