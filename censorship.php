<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <h1 class="text-center my-4">BadWords</h1>

        <div class="card mb-3">
            <div class="card-header">
                Testo originale
            </div>
            <div class="card-body">
                <p>
                    Testo: "<?php echo $_GET['user-text'];  ?>"
                </p>
                <p>
                    Lunghezza: <?php echo strlen($_GET['user-text']);  ?> caratteri.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Testo censurato
            </div>
            <div class="card-body">
                <p>Testo: "<?php echo str_ireplace($_GET['user-censure'], "***", $_GET['user-text']); ?>" </p>
            </div>
            <div class="card-body">
                <p>Lunghezza: <?php echo strlen(str_ireplace($_GET['user-censure'], "***", $_GET['user-text'])); ?> caratteri. </p>
            </div>
        </div>
    </div>
</body>