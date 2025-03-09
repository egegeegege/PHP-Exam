<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $desen = "#[a-zöüşi 1-3.]#u";

        $metin ="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, ex. Cumque vero nam voluptatum facere nulla voluptates ad et totam numquam quod, suscipit veritatis doloremque repellat veniam. Laudantium, laborum quisquam.";

        preg_match_all($desen,$metin,$sonuc);
        echo "<pre>";
        print_r($sonuc);
        echo "</pre>";


        $desen2 = "#[A-Z üİşö 0-9]#u";

        $metin2 = "Don't Worried Don't Cry Drink Vodka And Fly 75";

        preg_match_all($desen2,$metin2,$sonuc2);

        echo"-----------------<pre>";
            print_r($sonuc2);
        echo"<pre>";

    ?>
</body>
</html>