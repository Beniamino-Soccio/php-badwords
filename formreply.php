<?php 

$word = $_GET["userWord"];
$censoredword = $_GET["userCensored"];
$newWord = str_ireplace($censoredword, "***", $word)
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
                <p><?php echo "il paragfrafo che hai scritto è : " . $word . " e la sua lunghezza è di : " . strlen($word); ?></p>
                <p><?php echo "il nuovo paragrafo compreso di censura è : " . $newWord . " e la sua lunghezza è di : " . strlen($newWord) ?></p>
            </div>
        </div>
    </div>
</body>
</html>