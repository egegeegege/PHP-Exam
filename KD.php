<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Haftanın günlerini içeren bir dizi oluşturun ve 
        bu diziyi foreach döngüsü ile ekrana yazdırın. Ardından, dizinin 4. elemanını ekrana yazdırın.*/

        $_Days = array("pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar");

        foreach ($_Days as $key) {
            echo "gün: ".$key."<br><br>";
        }
        echo  $_Days[3]."<br>";
        /*
            Bir aylar dizisi oluşturun. 
            for döngüsü kullanarak tüm ayları ekrana yazdırın.
        */

        $_Mounths = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        for ($i=0; $i <count($_Mounths) ; $i++) { 
           echo $_Mounths[$i]."<br>";
        }

        /*
            Bir sayı dizisi oluşturun ve bu dizideki tüm elemanları 
            toplayarak ortalamayı hesaplayın.
             Sonuç olarak ortalamayı ekrana yazdırın.
        */

        $_sayilar = array(24,75,35,61);
        $_toplam = 0;
        $_ort = 0;

        for ($i=0; $i <count($_sayilar) ; $i++) { 
            $_toplam = $_toplam + $_sayilar[$i];
        }

        $_ort = $_toplam/4;
        echo "4 sayının ortalaması: ".$_ort;

        /*
            Bir şehirler ve plaka kodları dizisi oluşturun.
             Örnek olarak Plaka dizisindeki bir şehir için 
             plaka kodunu ekrana yazdırın.
        */

        $_sehirPlaka = array("Ardahan" => "75", "Batum" => "82", "Istanbul" => "34");

       echo "<br>".$_sehirPlaka["Ardahan"]."<br>";

       /*
            Farklı türde diziler oluşturun. Mesela, ülkeler dizisini for 
            döngüsü ile yazdırırken, 
            her bir ülkenin yanına başkentini de yazdıran bir dizi ekleyin.
       */

       $country_list = array(
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", 
        "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", 
        "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", 
        "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", 
        "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", 
        "Comoros", "Congo (Brazzaville)", "Congo", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", 
        "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", 
        "East Timor (Timor Timur)", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", 
        "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia, The", "Georgia", 
        "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", 
        "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", 
        "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", 
        "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", 
        "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", 
        "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", 
        "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Morocco", "Mozambique", 
        "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", 
        "Nigeria", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", 
        "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", 
        "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent", "Samoa", "San Marino", 
        "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", 
        "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", 
        "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", 
        "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", 
        "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", 
        "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", 
        "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    );
    

    $capital_list = array(
        "Kabul", "Tirana", "Algiers", "Andorra la Vella", "Luanda", "Saint John's", "Buenos Aires", 
        "Yerevan", "Canberra", "Vienna", "Baku", "Nassau", "Manama", "Dhaka", "Bridgetown", "Minsk", 
        "Brussels", "Belmopan", "Porto-Novo", "Thimphu", "Sucre", "Sarajevo", "Gaborone", "Brasilia", 
        "Bandar Seri Begawan", "Sofia", "Ouagadougou", "Gitega", "Phnom Penh", "Yaounde", "Ottawa", 
        "Praia", "Bangui", "N'Djamena", "Santiago", "Beijing", "Bogotá", "Moroni", "Brazzaville", 
        "Kinshasa", "San Jose", "Yamoussoukro", "Zagreb", "Havana", "Nicosia", "Prague", "Copenhagen", 
        "Djibouti", "Roseau", "Santo Domingo", "Dili", "Quito", "Cairo", "San Salvador", "Malabo", 
        "Asmara", "Tallinn", "Addis Ababa", "Suva", "Helsinki", "Paris", "Libreville", "Banjul", 
        "Tbilisi", "Berlin", "Accra", "Athens", "Saint George's", "Guatemala City", "Conakry", 
        "Bissau", "Georgetown", "Port-au-Prince", "Tegucigalpa", "Budapest", "Reykjavik", "New Delhi", 
        "Jakarta", "Tehran", "Baghdad", "Dublin", "Jerusalem", "Rome", "Kingston", "Tokyo", "Amman", 
        "Astana", "Nairobi", "Tarawa", "Pyongyang", "Seoul", "Kuwait City", "Bishkek", "Vientiane", 
        "Riga", "Beirut", "Maseru", "Monrovia", "Tripoli", "Vaduz", "Vilnius", "Luxembourg", "Skopje", 
        "Antananarivo", "Lilongwe", "Kuala Lumpur", "Malé", "Bamako", "Valletta", "Majuro", "Nouakchott", 
        "Port Louis", "Mexico City", "Palikir", "Chisinau", "Monaco", "Ulaanbaatar", "Rabat", 
        "Maputo", "Naypyidaw", "Windhoek", "Yaren", "Kathmandu", "Amsterdam", "Wellington", 
        "Managua", "Niamey", "Abuja", "Oslo", "Muscat", "Islamabad", "Ngerulmud", "Panama City", 
        "Port Moresby", "Asunción", "Lima", "Manila", "Warsaw", "Lisbon", "Doha", "Bucharest", 
        "Moscow", "Kigali", "Basseterre", "Castries", "Kingstown", "Apia", "San Marino", "São Tomé", 
        "Riyadh", "Dakar", "Belgrade", "Victoria", "Freetown", "Singapore", "Bratislava", "Ljubljana", 
        "Honiara", "Mogadishu", "Pretoria", "Madrid", "Colombo", "Khartoum", "Paramaribo", "Mbabane", 
        "Stockholm", "Bern", "Damascus", "Taipei", "Dushanbe", "Dodoma", "Bangkok", "Lomé", "Nuku'alofa", 
        "Port of Spain", "Tunis", "Ankara", "Ashgabat", "Funafuti", "Kampala", "Kyiv", "Abu Dhabi", 
        "London", "Washington, D.C.", "Montevideo", "Tashkent", "Port Vila", "Vatican City", "Caracas", 
        "Hanoi", "Sana'a", "Lusaka", "Harare"
    );
    
    $_uzunluk = count($capital_list);

    for ($i=0; $i <$_uzunluk ; $i++) { 
        echo $capital_list[$i]."---". $country_list[$i]."<br>";
    }

    ?>
</body>
</html>