<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pengggunaan Fungsi</h2>
    <?php
    function hitung($a,$b)
    {
        $hasil=$a+$b;
        return $hasil;
    }
    echo ("4 + 3 =".hitung(4,3));
    ?>
</body>
</html>