<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html{
            font-family : monospace;
        }
        table{
            width: 300px;
        }
        th{
            width: 50%;

        }
        table, th, td{
            border : solid 2px black;
            border-collapse : collapse;
            width : 10px;
        }
        th, td{
            text-align : center;
        }
    </style>
</head>
<body>
    <?php
    //function pertambahan
    function tambah($a,$b){
        echo $a + $b;
    }

    //function pengurangan
    function kurang($a,$b){
        echo $a - $b;
    }

    //function perkalian
    function kali($a,$b){
        echo $a * $b;
    }

    //function pembagian
    function bagi($a,$b){
        echo $a / $b;
    }
    ?>
    <!-- TABEL -->
    <table style="width:150px;">
        <tr>
            <th style="width:50%;">Operasi</th>
            <th style="width:50%;">Hasil</th>
        </tr>
        <tr>
            <td>8 + 2</th>
            <td><?php tambah(8,2) ?></th>
        </tr>
        <tr>
            <td>8 - 2</th>
            <td><?php kurang(8,2) ?></th>
        </tr>
        <tr>
            <td>8 * 2</th>
            <td><?php kali(8,2) ?></th>
        </tr>
        <tr>
            <td>8 / 2</th>
            <td><?php bagi(8,2) ?></th>
        </tr>
    </table>
</body>
</html>