<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exc4</title>
</head>

<body>
    <?php
    // example ord — Конвертирует первый байт строки в число от 0 до 255
    $arr = ["h", "e", "l", "l", "o"];
    foreach ($arr as $value) {
        echo ord($value)."<br>";
    }
    ?>
</body>

</html>