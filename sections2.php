<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>setins2</title>
</head>

<body>
    <pre>
        <?php
            $arr = explode(':', file_get_contents('file2.txt'));
            $arr[2]++;
            print_r($arr);
            file_put_contents('file2.txt', implode(':', $arr));
        ?>
    </pre>
</body>

</html>