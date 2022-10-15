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
        .err{
            color: red;
        }
    </style>
</head>
<body>
    <section>  
        <form action="req.php" method="post">
            <h1>Formulir</h1>
            Nama<br>
            <input type="text" value="<?php echo $_POST['nama'] ?>">
            <div class="err"><?php
            if(empty($_POST["nama"])){
                echo "*Nama harus diisi";
            } else{
                $name = $_POST["nama"];
            }
            ?></div><br><br>

            Email<br>
            <input type="email" value="<?php echo $_POST['email'] ?>">
            <div class="err"><?php
            if(empty($_POST["email"])){
                echo "*Email harus diisi";
            } else{
                $email = $_POST["email"];
            }
            ?></div><br><br>
            
            Password<br>
            <input type="password" value="<?php echo $_POST['password'] ?>">
            <div class="err"><?php
            if(!preg_match('@[A-Z][a-z][0-9][^\w]@',$_POST['password']) || strlen($_POST['password'])){
                echo "*Password harus 8 karakter dan menyertakan simbol dan angka";
            } else{
                $pw = $_POST["password"];
            }
            ?></div><br><br>

            Umur<br>
            <input type="number" value="<?php echo $_POST['umur'] ?>">
            <div class="err"><?php
            $umr = $_POST['umur'];
            $umr2 = intval($umr);
            if($umr2 < 18){
                echo "*Umur harus diatas 17 tahun";
            } else{
                $umur = $_POST["umur"];
            }
            ?></div><br><br>

            Jenis Kelamin 
            <div class="err"><?php
            if(empty($_POST["gender"])){
                echo "*gender harus diisi";
            } else{
                $gender = $_POST["gender"];
            }
            ?></div><br>
            <input type="radio" name="gender" value="Laki-laki">
            Laki-Laki<br>
            <input type="radio" name="gender" value="Perempuan">
            Perempuan<br>
            <input type="radio" name="gender" value="Bukan Keduanya">
            Bukan Keduanya<br><br>

        </form>


        <h1>Your input</h1>
        Nama : <?php echo @$name?><br>
        Email : <?php echo @$email?><br>
        Password : <?php echo @$pw?><br>
        Umur : <?php echo @$umur?><br>
        Gender : <?php echo @$gender?><br>
    </section>
</body>
</html>