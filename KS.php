<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $format = "#[0-9]{2}\.[0-9]{2}\.[0-9]{4}#";
        $metin = "29.09.2008";

        if (preg_match($format,$metin)) {
            echo"Girilen Tarih Formatı Doğru <br>";
        }
        else {
            echo"Girilen Tarih Formatı Yanlış <br>";
        }
    
        $format2 ="#[0-9]{2}\.[0-9]{2}\.[0-9]{4}#";
        $tarih = "03.05.2009";

        if (preg_match($format2,$tarih)) {
            echo"Girilen Tarih Formatı Doğru";
        }
        else {
            echo"Girilen Tarih Formatı Yanlış";
        }

    
    ?>
</body>
</html>