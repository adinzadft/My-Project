<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        html{
            font-family : monospace;
        }
    </style>
</head>
<body>
    <h1>Macam-macam Array pada PHP</h1>

    <!-- INDEXED ARRAY -->
    <p><b>1. Indexed Array</b></p>
    <p>Indexed array adalah suatu array dengan index numeric dimana value atau nilainya disimpan secara liniear.</p>
    <!-- CONTOH INDEXED ARRAY -->
    <p>Contoh :</p>
    <?php
    $komunitas = array("GDSC","Weboender","DSE");
    echo "I like " . $komunitas[2] . ", " . $komunitas[0] . " and " . $komunitas[1];
    ?>

    <!-- ASSOCIATIVE ARRAY -->
    <p><b>2. Associative Array</b></p>
    <p>
        Associative array adalah suatu array dengan index string dimana 
        value nya tidak disimpan secara linear, melainkan dengan memberikan key tertentu.
    </p>
    <!-- CONTOH ASSOCIATIVE ARRAY -->
    <p>Contoh :</p>
    <?php
    $age = array("Haris"=>"35","Salman"=>"67","Yazid"=>"43");
    echo "Haris is ".$age["Haris"]." years old"."<br>";
    echo "Salman is ".$age["Salman"]." years old"."<br>";
    echo "Yazid is ".$age["Yazid"]." years old"."<br>";
    ?>

    <!-- MULTIDIMENSIONAL ARRAY -->
    <p><b>3. Multidimensional Array</b></p>
    <p>
    Array yang berisi array tunggal atau banyak di dalamnya dan dapat diakses melalui beberapa indeks.
    </p>
    <!-- CONTOH MULTIDIMENSIONAL ARRAY -->
    <p>Contoh :</p>
    <?php
    $player = array(
        array("Halland",22,1),
        array("Maguire",1,22)
    );
    echo $player[0][0].": Goals:".$player[0][1].", Yellow Card: ".$player[0][2]."<br>";
    echo $player[1][0].": Goals:".$player[1][1].", Yellow Card: ".$player[1][2];
    ?>

</body>
</html>