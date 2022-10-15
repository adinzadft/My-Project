<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html{
            background-color: black;
            font-family : monospace;
        }
        form{
            width : 25%;
            background-color : grey;
            border-radius : 7px;
            border : solid 3px red;
        }
        fieldset{
            border : solid 1px black;
            border-radius : 3px;
        }
        fieldset input{
            background-color: gray;
            border : solid 0.5px black;

        }

        #submit{
            border : solid 1px black;
            border-radius : 2px;
            background-color: red;
            margin: 10px 0px;
            padding : 3px;
        }
        section{
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
    <section>
        <form action="hasil.php" method="get">
            <fieldset>
                <legend>NAMA</legend>
                
                <input type="text" name="nama"><br>
            </fieldset>
            <fieldset>
                <legend>EMAIL</legend>
                <input type="text" name="email"><br>
            </fieldset>
            <fieldset>
                <legend>HITUNG</legend>
                <?php include 'hitung.php';
                    echo $bil1 ." + ". $bil2;
                ?>
                <br>
                <input type="text" name="hasil">
            </fieldset>

            <center><input id="submit" type="submit"></center>
        </form>
    </section>
</body>
</html>