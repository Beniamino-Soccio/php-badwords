<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">PHP BADWORDS</h1>
        <div class="row">
            <div class="col">
                <form action="./formreply.php" method="GET">
                    <div>
                  <label for="user-word" class="form-label">inserisci un paragrafo</label>
                  <input type="text" class="form-control" id="userWord" name="userWord" placeholder="ciao sono un form">
                </div>
                <div class="my-5">
                  <label for="user-censored" class="form-label">inserisci la parola da censurare</label>
                  <input type="text" class="form-control" id="userCensored" name="userCensored" placeholder="form">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>
                

            </div>
        </div>
    </div>
</body>
</html>