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
                <form action="">
                    <div>
                  <label for="exampleFormControlInput1" class="form-label">inserisci una parola</label>
                  <input type="text" class="form-control" id="user-word">
                </div>
                <div class="my-5">
                  <label for="exampleFormControlInput1" class="form-label">inserisci la parola da censurare</label>
                  <input type="text" class="form-control" id="user-censored">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>
                

            </div>
        </div>
    </div>
</body>
</html>