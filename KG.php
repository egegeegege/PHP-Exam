<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // URL formatı için düzenli ifade (regex) tanımlanıyor
        // [a-z] -> küçük harfler (a'dan z'ye)
        // \. -> nokta (.)
        // \/ -> slash (/)
        // \: -> kolon (:)
        // + -> bunların bir veya daha fazlasını eşleştir
        $format = "#([a-z\.\/\:]+)#"; 

        // Kontrol edilecek sayfa adresi tanımlanıyor
        $girilenSayfaAdresi = "https://meb.gov.tr"; 

        // preg_match, düzenli ifadeye uygunluk kontrolü yapar
        if(preg_match($format, $girilenSayfaAdresi)) {
            // Eğer düzenli ifade ile eşleşirse (adres formatı doğru)
            echo "girilen adres formatı doğru"; 
        } else {
            // Eğer eşleşmezse (adres formatı yanlış)
            echo "girilen adres formatı yanlıs"; 
        }
        
        /***************************************************************/

        // İçerikte aranan kelimeyi tanımlıyoruz
        // /Ve/i -> 'Ve' kelimesini büyük/küçük harf duyarsız olarak (i parametresi ile) arar
        $kelime = "/Ve/i"; 

        // Arama yapılacak içerik
        $icerik = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi illo neque enim odit nemo, at velit nobis quas consectetur rem fugit distinctio praesentium error excepturi eum eos nostrum. Dolorem, tempore!"; 

        // preg_match_all, içerikte belirttiğimiz kelimenin tüm örneklerini arar
        if(preg_match_all($kelime, $icerik)) {
            // Eğer içerikte 'Ve' kelimesi bulunursa
            echo "<br>içerik var"; 
        }
        else {
            echo"İçerik Mevcut Değil";
        }
    ?>
</body>
</html>
