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
        }
        section{
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .err{
            color: red;
        }
    </style>
</head>
<body>
<section>
        <form action="hasil.php" method="get">
            <fieldset>
                <legend>NAMA</legend>
                
                <?php echo $_GET["nama"]?>
            </fieldset>
            <div class="err"><?php if(empty($_GET["nama"])){
                    $errMsg = "*name is empty";
                    echo $errMsg;
                } ?>
                </div>
            <fieldset>
                <legend>EMAIL</legend>
                
                <?php echo $_GET["email"]?><br>
            </fieldset>
            <div class="err"><?php if(empty($_GET["email"])){
                    $errMsg = "*email is empty";
                    echo $errMsg;
                } ?>
                </div>
            <fieldset>
                <legend>HITUNG</legend>
                <?php include 'hitung.php';
                    echo $bil1 ." + ". $bil2;
                ?>
                <br>
                <?php echo $_GET["hasil"]?>
            </fieldset>

            <center><input id="submit" type="submit"></center>
        </form>
    </section>
</body>
</html>