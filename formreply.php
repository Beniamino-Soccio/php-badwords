<?php 

$word = $_GET["userWord"];
$censoredword = $_GET["userCensored"];

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
        <h1 class="text-center mt-5">PHP BADWORDS REPLY</h1>
        <div class="row">
            <div class="col">
                <p> la parola finale compresa di censura è : <?php echo str_ireplace($censoredword, "***", $word); ?> </p>
            </div>
        </div>
    </div>
</body>
</html>