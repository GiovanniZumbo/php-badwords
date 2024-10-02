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

        <form action="censorship.php" method="get">
            <div class="mb-3">
                <label for="user-text" class="form-label">Inserisci qui il tuo testo</label>
                <textarea class="form-control" id="user-text" name="user-text" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="user-censure" class="form-label">Inserisci qui sotto la parola da censurare</label>
                <input type="text" class="form-control" id="user-censure" name="user-censure">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
    </div>
    </form>

</body>

</html>