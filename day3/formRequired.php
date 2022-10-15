<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM REQUIRED</title>
    <style>
        form{
            width: 40%;
            border-radius: 15px;
            padding: 20px 20px;
            font-family: monospace;
            border : solid 1px black;
        }
        form h1{
            text-align: center;
        }
        form input{
            margin : 3px 0;
        }
    </style>
</head>
<body>
    <section>  
        <form action="req.php" method="post">
            <h1>Formulir</h1>
            Nama<br>
            <input type="text" name="nama"><br><br>

            Email<br>
            <input type="email" name="email"><br><br>
            
            Password<br>
            <input type="password" name="password"><br><br>

            Umur<br>
            <input type="number" name="umur"><br><br>

            Jenis Kelamin<br>
            <input type="radio" name="gender" value="Laki-laki">
            Laki-Laki<br>
            <input type="radio" name="gender" value="Perempuan">
            Perempuan<br>
            <input type="radio" name="gender" value="Bukan Keduanya">
            Bukan Keduanya<br><br>

            <input type="submit">
        </form>
    </section>
</body>
</html>