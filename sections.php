<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sections</title>
</head>

<body>
    <pre>
    <?php
    //обработка без секций
    $ini_array = parse_ini_file("file.ini");
    print_r($ini_array);

    //обработка с секциями  
    $ini_array = parse_ini_file("file.ini", true);
    print_r($ini_array);
    ?>
    </pre>
</body>

</html>