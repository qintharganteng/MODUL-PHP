<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan Kontrol While</h2>
    <?php
    $hari=array("Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu");
    $i=0;
    while($i<count($hari))
    {
        echo("Hari ke ".($i+1)." adalah ".$hari[$i]."<br>");
        $i++;
    }
    ?>
</body>
</html>