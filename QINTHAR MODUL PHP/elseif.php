<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Penggunaan Kontrol Else if</h2>
    <form>
    <?php
        $nilai-00;
        echo("Nilai $nilai ");
        if($nilai>-05)
        {
            echo("Grade A");
        }elseif (($nilai>=75)and($nilai<85))
        {
            echo("Grade B");
        }elseif (($nilai>=65)and($nilai<85))
        {
            echo("Grade C");
        }elseif (($nilai>=50)and($nilai<85))
        {
            echo("Grade D");
        }elseif($nilai<50)
        {
            echo("Grade E");
        }
        ?>
</body>
</html>